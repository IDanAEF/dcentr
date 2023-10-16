    <?php
        $imgPath = get_template_directory_uri().'/assets/images/'
    ?>
    <footer class="footer">
        <img src="<?=$imgPath?>footer-cloud.png" alt="" class="footer__cloud">
        <div class="footer__top">
            <div class="container">
                <div class="footer__list">
                    <h2 class="footer__title text_fz80 text_fw700 text_ffAmat text_black">
                        Документы и положения
                    </h2>
                    <div class="footer__list-block text_fz18 text_fw500">
                        <ul>
                            <li><a href="">Договор оказания образовательных услуг</a></li>
                            <li><a href="">О порядке перевода, отчисленияи восстановления обучающихся</a></li>
                            <li><a href="">О режиме занятий обучающихся</a></li>
                            <li><a href="">Об оказании платных образовательных услуг</a></li>
                        </ul>
                        <ul>
                            <li><a href="">О порядке возникновения, приостановления, прекращения отношений между ОО/ИП,обучающимися и родителями</a></li>
                            <li><a href="">О формах, периодичности и порядке текущего контроля и промежуточной аттестации</a></li>
                        </ul>
                        <ul>
                            <li><a href="">О программах</a></li>
                            <li><a href="">О защите персональных данных работников</a></li>
                            <li><a href="">Комиссии по урегулированию спорово платных образовательных услугах</a></li>
                            <li><a href="">О порядке ведения личных дел обучающихся</a></li>
                            <li><a href="">О порядке ведения личных дел работников</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__main">
                    <a href="/" class="header__logo text_fz18 text_fw700 text_ffAmat">
                        <img src="<?=$imgPath?>logo.png" alt="<?php bloginfo('name'); ?>">
                        <span>Детский ДОСУГОВЫЙ <br>центр</span>
                    </a>
                    <div class="footer__right">
                        <div class="footer__time">
                            <img src="<?=$imgPath?>clock.png" alt="">
                            <div class="footer__time-text text_fw500">
                                <span class="text_fw600">График работы:</span>
                                пн-пт с 9.00-20.00<br>
                                сб с 10.00-19.00<br>
                                вс выходной день
                            </div>
                        </div>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__data text_fw500">
            <div class="container">
                <div class="footer__data-item">
                    <span class="text_fw400">ИНН:</span>
                    772335841700
                </div>
                <div class="footer__data-item">
                    <span class="text_fw400">ОГРНИП:</span>
                    323774600605441
                </div>
                <div class="footer__data-item">
                    <span class="text_fw400">ИП:</span>
                    Кулютникова Анна Сергеевна
                </div>
            </div>
        </div>
        <div class="footer__copy text_fz12 text_black">
            <div class="container">
                <span>Copyright © Детский досуговый центр <?=date('Y')?></span>
                <a href="/privacy/">Политика конфиденциальности</a>
            </div>
        </div>
    </footer>
    <?php
        wp_footer();
    ?>
</body>
</html>