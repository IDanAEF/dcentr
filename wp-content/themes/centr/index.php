<?php
    get_header();
?>
<main class="single-news">
    <section class="single-news__promo">
        <div class="container">
            <h1 class="text_fz90 text_fw700 text_black text_ffAmat text_animate"><?php the_title() ?></h1>
            <div class="single-news__detail default-text">
                <?php the_content() ?>
            </div>
        </div>
    </section>
</main>
<?php
    get_footer();
?>