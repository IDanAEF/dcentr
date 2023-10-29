<?php
    /*
        Template Name: Новости
    */
    get_header();
?>
<main class="news">
    <?php 
        $my_posts = get_posts( array(
            'numberposts' => -1,
            'category'    => 2,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true,
        ) );
        
        global $post;
    ?>
    <section class="main__news">
        <div class="container">
            <h1 class="text_fz90 text_black text_fw700 text_ffAmat text_animate">Новости</h1>
            <div class="main__news-line text_fw700 elem_animate bott">
                <?php if ($my_posts) : ?>
                <?php
                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                        ?>
                        <a href="<?=get_permalink()?>" class="main__news-item">
                            <?php if (get_field('image')) : ?>
                                <img src="<?=get_field('image')['sizes']['medium_large']?>" alt="<?php the_title(); ?>" class="main__news-item-image">
                            <?php endif; ?>
                            <div class="main__news-item-descr">
                                <?=get_field('preview')?>
                            </div>
                            <div class="main__news-item-date">
                                <span><?=get_the_date('d.m.Y')?></span>
                                <span><?=get_the_date('H:i')?></span>
                            </div>
                        </a>
                        <?php
                    }
                    
                    wp_reset_postdata();
                ?>
                <?php else : ?>
                    Нет новостей
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/map') ?>
</main>
<?php
    get_footer();
?>