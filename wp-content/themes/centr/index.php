<?php get_header(); ?>
<?php
    $imgPath = get_template_directory_uri().'/assets/images/';
?>
<main class="main">
    <section class="main__promo">
        <h1 style="display: none;"><?php bloginfo('name'); ?></h1>
        <img src="<?=$imgPath?>main-back.png" alt="main-back" class="main__promo-back img_bg">
        <img src="<?=$imgPath?>main-items.png" alt="main-items" class="main__promo-items">
        <div class="main__promo-arcs">
            <img src="<?=$imgPath?>main-arc-rec1.png" alt="main-arc-rec1" class="light desk">
            <img src="<?=$imgPath?>main-arc-rec1-mobile.png" alt="main-arc-rec1-mobile" class="light mobile">
            <img src="<?=$imgPath?>main-arc-rec2.png" alt="main-arc-rec2" class="white desk">
            <img src="<?=$imgPath?>main-arc-rec2-mobile.png" alt="main-arc-rec2-mobile" class="white mobile">
        </div>
        <div class="main__promo-images">
            <img src="<?=$imgPath?>main-image1.png" alt="main-image1" class="girl elem_animate top">
            <img src="<?=$imgPath?>main-image2.png" alt="main-image2" class="boy elem_animate top">
            <img src="<?=$imgPath?>main-cloud.png" alt="main-cloud" class="cloud">
            <img src="<?=$imgPath?>main-cloud.png" alt="main-cloud" class="cloud cloud2">
        </div>
        <div class="main__promo-side text_center">
            <img src="<?=$imgPath?>main-title.png" alt="<?php bloginfo('name'); ?>" class="main__promo-title desk elem_animate">
            <img src="<?=$imgPath?>main-title-mobile.png" alt="<?php bloginfo('name'); ?>" class="main__promo-title mobile elem_animate">
            <div class="main__promo-text">
                <span class="text_fz18 text_fw700 elem_animate bott">
                    <?=get_field('promo_descr')?>
                </span>
                <?=get_field('promo_underdescr')?>
                <a href="#cons-event" class="button text_fz16 text_ffMont text_fw600 elem_animate top">Консультация по выбору</a>
                <img src="<?=$imgPath?>rounded-arrow2.svg" alt="rounded-arrow2" class="arrow elem_animate">
            </div>
        </div>
        <div class="main__promo-dop">
            <?php if (get_field('promo_medal-descr')) : ?>
            <div class="main__promo-medal elem_animate custom">
                <img src="<?=$imgPath?>owl1.png" alt="owl1" class="owl">
                <img src="<?=$imgPath?>medal.png" alt="Образовательная лицензия" class="medal">
                <div class="main__promo-medal-text text_fz16 text_fw500">
                    <span class="text_fz30 text_ffAmat text_fw700 text_upper">Образовательная лицензия</span>
                    <?=get_field('promo_medal-descr')?>
                </div>
            </div>
            <?php endif; ?>
            <?php if(get_field('promo_talk')) : ?>
            <div class="main__promo-ps text_fz20 text_fw600 elem_animate custom">
                <img src="<?=$imgPath?>owl2.png" alt="owl2" class="owl">
                <img src="<?=$imgPath?>dotts.svg" alt="dotts" class="dot">
                <span class="text_animate"><?=get_field('promo_talk')?></span>
                <img src="<?=$imgPath?>dotts.svg" alt="dotts" class="dot bott">
            </div>
            <?php endif; ?>
        </div>
        <img src="<?=$imgPath?>cube1.png" alt="cube1" class="main__promo-cube1 top-to-bott">
        <img src="<?=$imgPath?>cube2.png" alt="cube2" class="main__promo-cube2 top-to-bott high">
    </section>
    <section class="main__benefit">
        <div class="container text_fz30 text_ffAmat text_fw700 text_upper">
            <div class="main__benefit-item color1 elem_animate">
                <span>профессиональные <br>сотрудники</span>
                <img src="<?=$imgPath?>/benefit/benef1.png" alt="профессиональные сотрудники">
            </div>
            <div class="main__benefit-item color2 elem_animate">
                <span>комфортная <br>обстановка</span>
                <img src="<?=$imgPath?>/benefit/benef2.png" alt="комфортная обстановка">
            </div>
            <div class="main__benefit-item color3 elem_animate">
                <span>способные <br>детки</span>
                <img src="<?=$imgPath?>/benefit/benef3.png" alt="способные детки">
            </div>
        </div>
    </section>
    <?php if (get_field('gallery')) : ?>
    <section class="main__gallery gallery elem_animate bott" data-pc-vis="4" data-lap-vis="3" data-mob-vis="2">
        <div class="main__gallery-track gallery-track">
            <?php
                foreach (get_field('gallery') as $key => $image) {
                    ?>
                    <div class="main__gallery-item gallery-item" data-full="<?=$image['url']?>">
                        <img src="<?=$image['sizes']['medium_large']?>" alt="<?=$image['alt'] ?: 'Галерея - '.$key ?>" class="img_bg">
                    </div>
                    <?php
                }
            ?>
        </div>
    </section>
    <?php endif; ?>
    <section class="main__works text_black">
        <div class="container">
            <h2 class="text_fz80 text_fw700 text_ffAmat text_animate">Интересные виды деятельности:</h2>
            <div class="main__works-row">
                <?php
                    $cards = [
                        80 => [
                            'color' => 1,
                            'image' => 1
                        ],
                        82 => [
                            'back' => true,
                            'image' => 2
                        ],
                        84 => [
                            'color' => 2,
                            'image' => 3
                        ],
                        86 => [
                            'color' => 3,
                            'image' => 4
                        ],
                        88 => [
                            'color' => 4,
                            'image' => 5,
                            'three' => true
                        ],
                        90 => [
                            'color' => 5,
                            'image' => 6,
                            'three' => true
                        ],
                        92 => [
                            'color' => 6,
                            'image' => 7,
                            'three' => true
                        ]
                    ];

                    foreach($cards as $id => $card) {
                        if ($card['three']) continue;
                        ?>
                        <a href="<?=get_permalink($id)?>" class="main__works-item<?=$card['color'] ? ' color'.$card['color'] : ''?><?=$card['back'] ? ' back' : ''?> elem_animate top">
                            <img src="<?=$imgPath?>/works/work<?=$card['image']?>.png" alt="<?=get_the_title($id)?>" class="<?=$card['back'] ? 'img_bg' : 'main__works-item-image'?>">
                            <h4 class="text_fz20 text_fw700"><?=get_the_title($id)?></h4>
                            <div class="main__works-item-descr">
                               <?=get_field('descr-card', $id)?>
                            </div>
                            <div class="main__works-item-arrow">
                                <img src="<?=$imgPath?>arrow-right-short.svg" alt="arrow-right-short">
                            </div>
                        </a>
                        <?php
                    }
                ?>
            </div>
            <div class="main__works-row three">
                <?php
                    foreach($cards as $id => $card) {
                        if (!$card['three']) continue;
                        ?>
                        <a href="<?=get_permalink($id)?>" class="main__works-item<?=$card['color'] ? ' color'.$card['color'] : ''?><?=$card['back'] ? ' back' : ''?> elem_animate bott">
                            <img src="<?=$imgPath?>/works/work<?=$card['image']?>.png" alt="<?=get_the_title($id)?>" class="<?=$card['back'] ? 'img_bg' : 'main__works-item-image'?>">
                            <h4 class="text_fz20 text_fw700"><?=get_the_title($id)?></h4>
                            <div class="main__works-item-descr">
                               <?=get_field('descr-card', $id)?>
                            </div>
                            <div class="main__works-item-arrow">
                                <img src="<?=$imgPath?>arrow-right-short.svg" alt="arrow-right-short">
                            </div>
                        </a>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <section class="main__stocks" id="stocks">
        <img src="<?=$imgPath?>stocks-back.png" alt="stocks-back" class="main__stocks-back">
        <div class="container">
            <h2 class="text_fz80 text_black text_fw700 text_ffAmat">Акции:</h2>
            <div class="main__stocks-line text_fz20 text_fw700">
                <div class="main__stocks-item">
                    <picture>
                        <source srcset="<?=$imgPath?>stocks/stocks1-2.jpg" media="(max-width: 992px)">
                        <img src="<?=$imgPath?>stocks/stocks1.jpg" alt="В день рождения" class="img_bg">
                    </picture>
                    <div class="main__stocks-text">
                        <h3 class="text_fz60 text_ffAmat">В день рождения</h3>
                        <span>дарим Вашему малышу <br>скидку в 50% на занятие.</span>
                    </div>
                </div>
                <div class="main__stocks-item">
                    <picture>
                        <source srcset="<?=$imgPath?>stocks/stocks2-2.jpg" media="(max-width: 992px)">
                        <img src="<?=$imgPath?>stocks/stocks2.jpg" alt="Приведи друга" class="img_bg">
                    </picture>
                    <div class="main__stocks-text">
                        <h3 class="text_fz60 text_ffAmat">Приведи друга</h3>
                        <span>получил <br>20% скидки на занятие.</span>
                    </div>
                </div>
                <div class="main__stocks-item long text_white">
                    <picture>
                        <source srcset="<?=$imgPath?>stocks/stocks3-2.jpg" media="(max-width: 992px)">
                        <img src="<?=$imgPath?>stocks/stocks3.jpg" alt="Абанемент на месяц" class="img_bg">
                    </picture>
                    <div class="main__stocks-text">
                        <h3 class="text_fz60 text_ffAmat">Абонемент на месяц</h3>
                        <span>со скидкой 20%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/feedback') ?>
    <?php get_template_part('template-parts/reviews') ?>
    <?php get_template_part('template-parts/rucovod') ?>
    <?php 
        $my_posts = get_posts( array(
            'numberposts' => 6,
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

        if ($my_posts) :
    ?>
    <section class="main__news slider mobile-only">
        <div class="container">
            <h2 class="text_fz80 text_black text_fw700 text_ffAmat elem_animate bott">
                Новости:
                <div class="main__news-arrows">
                    <img src="<?=get_template_directory_uri()?>/assets/images/arrow-left.svg" alt="left" class="left slider-left">
                    <img src="<?=get_template_directory_uri()?>/assets/images/arrow-right.svg" alt="right" class="right slider-right">
                </div>
            </h2>
            <div class="main__news-line slider-list text_fw700 elem_animate top">
                <div class="main__news-track slider-track">
                    <?php
                        foreach( $my_posts as $post ){
                            setup_postdata( $post );
                            ?>
                            <a href="<?=get_permalink()?>" class="main__news-item slider-item">
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
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php get_template_part('template-parts/map') ?>
</main>
<?php get_footer(); ?>