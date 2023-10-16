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
                <div class="header__map text_fw500">
                    <img src="<?=$imgPath?>map.png" alt="г. Лыткарино, 6 микрорайон, дом 33">
                    <span>г. Лыткарино, <br>6 микрорайон, дом 33</span>
                </div>
                <div class="header__phone">
                    <img src="<?=$imgPath?>whatsapp.svg" alt="">
                    <div class="header__phone-text">
                        <a href="tel:+79774280156" class="text_fz16 text_fw600">+7(977) 428-01-56</a>
                        <span class="text_fw500">Заказать звонок</span>
                    </div>
                </div>
                <button class="header__button purp text_fz16 text_fw600 text_ffMont">Пробное занятие</button>
            </div>
        </div>
    </header>