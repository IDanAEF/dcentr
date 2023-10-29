<?php
    $imgPath = get_template_directory_uri().'/assets/images/'
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?=is_404() ? '404' : get_the_title(); ?></title>
    <?php
        wp_head();
    ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="/" class="header__logo text_fz18 text_fw700 text_ffAmat">
                <img src="<?=$imgPath?>logo.png" alt="<?php bloginfo('name'); ?>">
                <span>Детский ДОСУГОВЫЙ центр</span>
            </a>
            <div class="header__right">
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
                <button class="header__button modal-call purp text_fz16 text_fw600 text_ffMont" data-modal="feedback-modal">
                    Пробное занятие
                </button>
                <div class="header__burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <?php
            $cards = [80, 82, 84, 86, 88, 90, 92];
        ?>
        <div class="header__bottom text_fz16 text_fw500">
            <div class="container">
                <a href="/">Главная</a>
                <span class="parent" data-menu="works">
                    <div class="btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    Виды деятельности
                </span>
                <div class="header__bottom-sub">
                    <?php
                        foreach($cards as $id) {
                            ?>
                            <a href="<?=get_permalink($id)?>"><?=get_the_title($id)?></a>
                            <?php
                        }
                    ?>
                </div>
                <a href="/#stocks">Акции</a>
                <a href="/#reviews">Отзывы</a>
                <a href="/#rucovods">Руководители</a>
                <a href="/news/">Новости</a>
                <a href="/contacts/">Контакты</a>
            </div>
            <div class="header__bottom-info">
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
                <button class="header__button modal-call purp text_fz16 text_fw600 text_ffMont" data-modal="feedback-modal">
                    Пробное занятие
                </button>
            </div>
        </div>
        <div class="header__menu" data-menu="works">
            <div class="container text_fz40 text_black text_ffAmat text_fw700">
                <?php
                    foreach($cards as $id) {
                        ?>
                        <a href="<?=get_permalink($id)?>"><?=get_the_title($id)?></a>
                        <?php
                    }
                ?>
            </div>
            <img src="<?=$imgPath?>owl-big.png" alt="owl-big" class="header__menu-owl">
            <img src="<?=$imgPath?>footer-cloud.png" alt="footer-cloud" class="main__map-cloud bott">
        </div>
    </header>