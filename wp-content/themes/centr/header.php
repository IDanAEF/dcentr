<?php
    $imgPath = get_template_directory_uri().'/assets/images/';

    global $post;

    $seoTitle = $seoTitle ?: get_bloginfo('name').' - '.(is_404() ? '404' : get_the_title());
    $seoDescr = get_field('seo-description');
    $seoKeyw = get_field('seo-keywords');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/png" href="<?=$imgPath?>favicon.png" rel="icon">
    <link type="image/png" href="<?=$imgPath?>favicon.png" rel="shortcut icon">
    <link type="image/png" href="<?=$imgPath?>favicon.png" rel="apple-touch-icon">

    <title><?=$seoTitle?></title>
    <meta name="og:title" content="<?=$seoTitle?>">

    <?php if($seoDescr) : ?>
        <meta name="description" content="<?=$seoDescr?>">
        <meta name="og:description" content="<?=$seoDescr?>">
    <?php endif; ?>

    <?php if($seoKeyw) : ?>
        <meta name="keywords" content="<?=$seoKeyw?>">
    <?php endif; ?>

    <?php
        wp_head();
    ?>

    <script src="https://www.google.com/recaptcha/api.js?render=6LdTBZspAAAAADp-m8OK-ERROAAhkHEkChxeSxkS"></script>
    <script>
        grecaptcha.ready(function () {
            const setToken = () => {
                grecaptcha.execute('6LdTBZspAAAAADp-m8OK-ERROAAhkHEkChxeSxkS', { action: 'check' }).then(function (token) {
                    let captInput = document.querySelectorAll('input[name="recaptcha"]');
                    
                    captInput.forEach(inp => {
                        inp.value = token;
                    })
                });
            }

            setToken();
            setInterval(setToken, 90*1000);
        });
    </script>
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
                            <span class="text_fw500">Заказать звонок</span>
                        </a>
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
                            <a href="<?=get_permalink($id)?>"<?=$post->ID == $id ? ' class="active"' : ''?>><?=get_the_title($id)?></a>
                            <?php
                        }
                    ?>
                </div>
                <a href="/#stocks">Акции</a>
                <a href="/#reviews">Отзывы</a>
                <a href="/#rucovods">Руководители</a>
                <a href="/price/">Цены</a>
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
                            <span class="text_fw500">Заказать звонок</span>
                        </a>
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
                        <a href="<?=get_permalink($id)?>"<?=$post->ID == $id ? ' class="active"' : ''?>><?=get_the_title($id)?></a>
                        <?php
                    }
                ?>
            </div>
            <img src="<?=$imgPath?>owl-big.png" alt="owl-big" class="header__menu-owl">
            <img src="<?=$imgPath?>footer-cloud.png" alt="footer-cloud" class="main__map-cloud bott">
        </div>
    </header>