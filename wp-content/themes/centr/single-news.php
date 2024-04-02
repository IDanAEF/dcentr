<?php
    /*
        Template Name: Новость
        Template Post Type: Post
    */
    get_header();
?>
<main class="single-news">
    <section class="single-news__promo">
        <div class="container">
            <h1 class="text_fz90 text_fw700 text_black text_ffAmat text_animate"><?php the_title() ?></h1>
            <div class="single-news__detail default-text">
                <?=get_field('detail')?>
            </div>
            <div class="single-news__date text_fw700">
                <span><?=get_the_date('d.m.Y')?></span>
                <span><?=get_the_date('H:i')?></span>
            </div>
            <?php if (get_field('image')) : ?>
                <img src="<?=get_field('image')['url']?>" alt="<?php the_title() ?>" class="single-news__image elem_animate top">
            <?php endif; ?>
            <div class="single-news__navigate">
                <?php
                    $prev = get_previous_post(true);
                    $next = get_next_post(true);

                    $prevThumb = get_field('image', $prev->ID)['sizes']['thumbnail'];
                    $nextThumb = get_field('image', $next->ID)['sizes']['thumbnail'];

                    if ($prev) :
                ?>
                <a href="<?=get_permalink($prev->ID)?>" class="single-news__navigate-arrow">
                    <?php if ($prevThumb) : ?>
                        <img src="<?=$prevThumb?>" alt="<?=get_the_title($prev->ID)?>" class="img_bg">
                    <?php endif; ?>
                    <img src="<?=get_template_directory_uri()?>/assets/images/arrow-left.svg" alt="left" class="image">
                </a>
                <?php endif; ?>
                <?php if ($next) : ?>
                <a href="<?=get_permalink($next->ID)?>" class="single-news__navigate-arrow right">
                    <?php if ($nextThumb) : ?>
                        <img src="<?=$nextThumb?>" alt="<?=get_the_title($next->ID)?>" class="img_bg">
                    <?php endif; ?>
                    <img src="<?=get_template_directory_uri()?>/assets/images/arrow-right.svg" alt="right" class="image">
                </a>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/map') ?>
</main>
<?php
    get_footer();
?>