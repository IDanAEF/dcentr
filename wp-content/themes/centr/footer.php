    <?php
        $imgPath = get_template_directory_uri().'/assets/images/'
    ?>
    <footer class="footer">
        <img src="<?=$imgPath?>footer-cloud.png" alt="footer-cloud" class="footer__cloud">
        <div class="footer__top">
            <div class="container">
                <?php if (have_rows('docs', 28)) : ?>
                <div class="footer__list">
                    <h2 class="footer__title text_fz80 text_fw700 text_ffAmat text_black text_animate">
                        Документы и положения
                    </h2>
                    <div class="footer__list-block text_fz18 text_fw500 elem_animate bott">
                        <?php
                            $docs = get_field('docs', 28);

                            foreach($docs as $list) {
                                ?>
                                <ul>
                                    <?php
                                        foreach($list['list'] as $point) {
                                            ?>
                                            <li><a href="<?=$point['document']?>" target="_blank"><?=$point['name']?></a></li>
                                            <?php
                                        }
                                    ?>
                                </ul>
                                <?php
                            }
                        ?>
                    </div>
                </div>
                <?php endif; ?>
                <div class="footer__main">
                    <a href="/" class="header__logo text_fz18 text_fw700 text_ffAmat">
                        <img src="<?=$imgPath?>logo.png" alt="<?php bloginfo('name'); ?>">
                        <span>Детский ДОСУГОВЫЙ центр</span>
                    </a>
                    <div class="footer__right">
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
                </div>
            </div>
        </div>
        <div class="footer__data text_fw500">
            <div class="container">
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
        <div class="footer__copy text_fz12 text_black">
            <div class="container">
                <span>Copyright © <?php bloginfo('name'); ?> <?=date('Y')?></span>
                <a href="/privacy/">Политика конфиденциальности</a>
            </div>
        </div>
    </footer>
    <div class="gallery__overlay">
        <div class="gallery__overlay-block">
            <span class="modal-close gallery__overlay-close"></span>
            
        </div>
    </div>
    <?php if(get_field('coordinates', 28)) : ?>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=5727f775-e56b-498e-bb2a-a48a1702a7f7&lang=ru_RU" type="text/javascript"></script>
    <script>
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                center: [<?=get_field('coordinates-centr', 28)?>],
                zoom: 17
            }, {
                searchControlProvider: 'yandex#search'
            });

            myPlacemark = new ymaps.Placemark([<?=get_field('coordinates', 28)?>], {
                hintContent: `<?=str_replace(['<br>', '<br/>', '<br />'], '', get_field('address', 28))?>`,
            }, {
                iconLayout: 'default#image',
                iconImageSize: [35, 48]
            });

            myMap.geoObjects.add(myPlacemark);
        });
    </script>
    <?php endif; ?>
    <?php
        wp_footer();
    ?>
</body>
</html>