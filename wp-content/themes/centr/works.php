<?php
    /*
        Template Name: Виды деятельности
    */
    get_header();
    global $post;

    $imgPath = get_template_directory_uri().'/assets/images/';
?>
<main class="works">
    <section class="main__promo works__promo">
        <h1 style="display: none;"><?php the_title(); ?></h1>
        <img src="<?=$imgPath?>main-back.png" alt="main-back" class="main__promo-back img_bg">
        <img src="<?=$imgPath?>main-items.png" alt="main-items" class="main__promo-items">
        <div class="main__promo-arcs">
            <img src="<?=$imgPath?>main-arc-rec1.png" alt="main-arc-rec1" class="light desk">
            <img src="<?=$imgPath?>main-arc-rec1-mobile.png" alt="main-arc-rec1-mobile" class="light mobile">
            <img src="<?=$imgPath?>main-arc-rec2.png" alt="main-arc-rec2" class="white desk">
            <img src="<?=$imgPath?>main-arc-rec2-mobile.png" alt="main-arc-rec2-mobile" class="white mobile">
        </div>
        <div class="main__promo-images images images<?=$post->ID?>">
            <img src="<?=$imgPath?>pages/image<?=$post->ID?>.png" alt="main-image1" class="girl elem_animate top">
            <?php if(file_exists(get_stylesheet_directory().'/assets/images/pages/image'.$post->ID.'-2.png')) : ?>
                <img src="<?=$imgPath?>pages/image<?=$post->ID?>-2.png" alt="main-image2" class="boy elem_animate top">
            <?php endif; ?>
            <img src="<?=$imgPath?>main-cloud.png" alt="main-cloud" class="cloud">
            <img src="<?=$imgPath?>main-cloud.png" alt="main-cloud" class="cloud cloud2">
        </div>
        <div class="main__promo-side text_center">
            <img src="<?=$imgPath?>pages/title<?=$post->ID?>.png" alt="<?php the_title(); ?>" class="main__promo-title title<?=$post->ID?> elem_animate">
            <div class="main__promo-text">
                <span class="text_fz18 text_fw700 elem_animate bott">
                    <?=get_field('descr-promo')?>
                </span>
                <?=get_field('promo_underdescr', 10)?>
                <a href="#cons-event" class="button text_fz16 text_ffMont text_fw600 elem_animate top">Консультация по выбору</a>
            </div>
        </div>
        <div class="main__promo-dop">
            <?php if (get_field('promo_medal-descr', 10)) : ?>
            <div class="main__promo-medal elem_animate custom">
                <img src="<?=$imgPath?>owl1.png" alt="owl1" class="owl">
                <img src="<?=$imgPath?>medal.png" alt="Образовательная лицензия" class="medal">
                <div class="main__promo-medal-text text_fz16 text_fw500">
                    <span class="text_fz30 text_ffAmat text_fw700 text_upper">Образовательная лицензия</span>
                    <?=get_field('promo_medal-descr', 10)?>
                </div>
            </div>
            <?php endif; ?>
            <?php if(get_field('promo_talk', 10)) : ?>
            <div class="main__promo-ps text_fz20 text_fw600 elem_animate custom">
                <img src="<?=$imgPath?>owl2.png" alt="owl2" class="owl">
                <img src="<?=$imgPath?>dotts.svg" alt="dotts" class="dot">
                <span class="text_animate"><?=get_field('promo_talk', 10)?></span>
                <img src="<?=$imgPath?>dotts.svg" alt="dotts" class="dot bott">
            </div>
            <?php endif; ?>
        </div>
        <img src="<?=$imgPath?>cube1.png" alt="cube1" class="main__promo-cube1 top-to-bott">
        <img src="<?=$imgPath?>cube2.png" alt="cube2" class="main__promo-cube2 top-to-bott high">
    </section>
    <section class="works__content">
        <div class="container">
            <h2 class="works__content-title text_fz80 text_fw700 text_black text_ffAmat text_animate">
                <?=get_field('h2')?>
            </h2>
            <div class="works__content-undertitle text_fz40 text_fw700 text_black text_ffAmat elem_animate bott">
                <?=get_field('undertitle')?>
            </div>
            <?php
                $cols = get_field('points_cols');
            ?>
            <?php if (get_field('simple-text')) : ?>
            <div class="works__simpletext text_fz16 text_fw500">
                <?=get_field('simple-text')?>
            </div>
            <?php endif; ?>
            <div class="works__points text_fz16 text_fw500<?=$cols ? ' cols elem_animate top' : ''?>">
                <?php
                    $ind = 1;
                    $row = 1;
                    while(have_rows('points_list')) {
                        the_row();

                        $direct = $row % 2 == 1 ? 'right' : 'left';

                        if (!$cols && $ind % 2 == 1) echo '<div class="works__points-row elem_animate '.$direct.'">';
                        ?>
                        <div class="works__points-item">
                            <i class="text_ffAmat text_fz100 text_fw700 text_normal"><?=$ind > 9 ? $ind : '0'.$ind?></i>
                            <span><?=get_sub_field('name')?></span>
                        </div>
                        <?php
                        if (!$cols && $ind % 2 == 0) {
                            echo '</div>';
                            $row++;
                        }

                        $ind++;
                    }
                    if (!$cols && $ind % 2 == 1) echo '</div>';
                ?>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/feedback') ?>
    <?php get_template_part('template-parts/reviews') ?>
    <?php get_template_part('template-parts/rucovod') ?>
    <?php get_template_part('template-parts/map') ?>
</main>
<?php
    get_footer();
?>