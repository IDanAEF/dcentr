<?php 
    add_theme_support('menus');

    function dcentrAddScripts() {
        wp_enqueue_style( 'dcentr_main_style', get_template_directory_uri() . '/assets/css/style.min.css' );
        wp_enqueue_style( 'dcentr_custom_style', get_template_directory_uri() . '/custom.css' );
        
        wp_enqueue_script( 'dcentr_main_script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true );
        wp_enqueue_script( 'dcentr_custom_script', get_template_directory_uri() . '/custom.js', array(), null, true );
    }

    add_action( 'wp_enqueue_scripts', 'dcentrAddScripts' );

    function filter_nav_menu_link_attributes($atts, $item, $args) {
        if ($args->menu === 'Main') {
            if ($item->current) {
                $atts['class'] = 'active';
            }
        }
    
        return $atts;
    }
    
    add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);

    add_action( 'template_redirect', function(){
        ob_start( function( $buffer ){
            $buffer = str_replace('type="text/javascript"', '', $buffer );
            $buffer = str_replace('type="text/css"', '', $buffer );
            $buffer = str_replace("type='text/javascript'", '', $buffer );
            $buffer = str_replace("type='text/css'", '', $buffer );
            $buffer = preg_replace("~<meta (.*?)\/>~", "<meta $1>", $buffer);
            $buffer = preg_replace("~<link (.*?)\/>~", "<link $1>", $buffer);
            $buffer = preg_replace("~<input (.*?)\/>~", "<input $1>", $buffer);
            $buffer = preg_replace("~<img (.*?)\/>~", "<img $1>", $buffer);
            $buffer = str_replace("<br />", '<br>', $buffer );
            return $buffer;
        });
    });

    function feedback(){
        $names = [
            'feedname' => 'Имя',
            'feedphone' => 'Номер телефона',
            'feedage' => 'Возраст ребёнка',
            'feedhobby' => 'Вид деятельности'
        ];

        $meta = [];
        $text = "";

        foreach($_POST as $name => $value) {
            $meta[$name] = $value;
            $text .= $names[$name].': '.$value.";\n";
        } 

        $post_data = [
            'post_title'    => 'Сообщение от '.$_POST['feedname'],
            'post_status'   => 'publish',
            'post_type'     => 'feedback',
            'post_author'   => 1,
            'ping_status'   => 'open',
            'meta_input'    => $meta,
        ];
        $post_id = wp_insert_post($post_data);


        $to = get_option('admin_email');
        $from = get_option('admin_email');
        $subject = get_bloginfo('name').": Новое сообщение с формы связи.";
        $message = "
            У вас новое сообщение с формы обратной связи.

            ".$text."
        ";

        $mailheaders = "MIME-Version: 1.0\r\n";
        $mailheaders .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $mailheaders .= "X-Mailer: PHP/".phpversion()."\r\n";
        $mailheaders .= "From: ".$from."\r\n";
        $mailheaders .= "Reply-To: ".get_option('admin_email')."\r\n";

        $rsf = wp_mail($to,$subject,$message,$mailheaders);

        die();
    }
    add_action('wp_ajax_feedback', 'feedback');
    add_action('wp_ajax_nopriv_feedback', 'feedback');