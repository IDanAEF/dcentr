<?php
    /*
        Template Name: Контакты
    */
    get_header();

    $imgPath = get_template_directory_uri().'/assets/images/';
?>
<main class="contacts">
    <section class="contacts__promo">
        <div class="container">
            <h1 class="text_fz90 text_black text_ffAmat text_fw700 text_center"><?php the_title() ?></h1>
            <div class="contacts__main">
                <?php if (get_field('work', 28)) : ?>
                <div class="footer__time">
                    <img src="<?=$imgPath?>clock.png" alt="work">
                    <div class="footer__time-text text_fw500">
                        <span class="text_fw600">График работы:</span>
                        <?=get_field('work', 28)?>
                    </div>
                </div>
                <?php endif; ?>
                <?php if (get_field('address', 28)) : ?>
                <a href="<?=get_field('address-link', 28)?>" target="_blank" class="header__map text_fw500">
                    <img src="<?=$imgPath?>map.png" alt="Адрес">
                    <span><?=get_field('address', 28)?></span>
                </a>
                <?php endif; ?>
                <?php if (get_field('phone', 28)) : ?>
                <div class="header__phone">
                    <img src="<?=$imgPath?>whatsapp.svg" alt="WhatsApp">
                    <div class="header__phone-text">
                        <a href="https://api.whatsapp.com/send/?phone=<?=str_replace(['-', '+', '(', ')', ' '], '', get_field('phone', 28))?>" target="_blank" class="text_fz16 text_fw600">
                            <?=get_field('phone', 28)?>
                        </a>
                        <span class="text_fw500">Заказать звонок</span>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="contacts__data text_fw600">
                <?php
                    while (have_rows('scans', 28)) {
                        the_row();
                        ?>
                        <div class="footer__data-item">
                            <span class="text_fw400"><?=get_sub_field('name')?>:</span>
                            <?=get_sub_field('value')?>
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