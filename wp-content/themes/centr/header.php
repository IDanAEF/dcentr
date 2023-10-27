<?php
    $imgPath = get_template_directory_uri().'/assets/images/'
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php the_title(); ?></title>
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
                <a href="#prob-event" class="header__button button purp text_fz16 text_fw600 text_ffMont">Пробное занятие</a>
            </div>
        </div>
    </header>