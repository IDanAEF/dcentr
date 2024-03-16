<?php
    /*
        Template Name: Цены
    */
    get_header();

    $imgPath = get_template_directory_uri().'/assets/images/';
?>
<main class="price">
    <section class="price__promo">
        <div class="container">
            <h1 class="text_fz90 text_black text_ffAmat text_fw700 text_center"><?php the_title() ?></h1>
            <div class="price__table text_fz18 text_fw500">
                <div class="row row-head text_fw700">
                    <div class="col col1">Предмет</div>
                    <div class="col col2">Цены</div>
                    <div class="col col3">Занятие</div>
                    <div class="col col4">Время</div>
                </div>
                <?php
                    $price = get_field('price');

                    foreach($price as $row) {
                        ?>
                        <div class="row" style="background-color: <?=$row['color']?>;">
                            <div class="col col1 text_fw700"><?=$row['subject']?></div>
                            <div class="col col2"><?=$row['cost']?> ₽</div>
                            <div class="col col3"><?=$row['class']?></div>
                            <div class="col col4"><?=$row['time']?></div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
        <img src="<?=$imgPath?>cube1.png" alt="cube1" class="main__promo-cube1 top-to-bott">
        <img src="<?=$imgPath?>cube2.png" alt="cube2" class="main__promo-cube2 top-to-bott high">
    </section>
    <?php get_template_part('template-parts/map') ?>
</main>
<?php
    get_footer();
?>