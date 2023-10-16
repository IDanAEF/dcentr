<?php get_header(); ?>
<?php
    $imgPath = get_template_directory_uri().'/assets/images/'
?>
<main class="main">
    <section class="main__promo">
        <img src="<?=$imgPath?>main-back.png" alt="" class="main__promo-back img_bg">
        <img src="<?=$imgPath?>main-items.png" alt="" class="main__promo-items">
        <div class="main__promo-arcs">
            <img src="<?=$imgPath?>main-arc-rec1.png" alt="" class="light">
            <img src="<?=$imgPath?>main-arc-rec2.png" alt="" class="white">
        </div>
        <div class="main__promo-images">
            <img src="<?=$imgPath?>main-image1.png" alt="" class="girl">
            <img src="<?=$imgPath?>main-image2.png" alt="" class="boy">
            <img src="<?=$imgPath?>main-cloud.png" alt="" class="cloud">
        </div>
        <div class="main__promo-side text_center">
            <img src="<?=$imgPath?>main-title.png" alt="" class="main__promo-title">
            <div class="main__promo-text">
                <span class="text_fz18 text_fw700">
                    Дети каждый день учат нас, а мы, в свою очередь, помогаем им принять информацию взрослого мира в доступной, комфортной и лёгкой форме.
                </span>
                Мы знаем как сделать, <b>чтобы глаза блестели</b>, <br>а <b>желание научиться росло</b> с каждым днем.
                <button class="text_fz16 text_ffMont text_fw600">Консультация по выбору</button>
                <img src="<?=$imgPath?>rounded-arrow2.svg" alt="" class="arrow">
            </div>
        </div>
        <div class="main__promo-dop">
            <div class="main__promo-medal">
                <img src="<?=$imgPath?>owl1.png" alt="" class="owl">
                <img src="<?=$imgPath?>medal.png" alt="" class="medal">
                <div class="main__promo-medal-text text_fz16 text_fw500">
                    <span class="text_fz30 text_ffAmat text_fw700 text_upper">Образовательная лицензия</span>
                    это стабильность, уверенность, спокойствие родителей и нашего центра.
                </div>
            </div>
            <div class="main__promo-ps text_fz20 text_fw600">
                <img src="<?=$imgPath?>owl2.png" alt="" class="owl">
                <img src="<?=$imgPath?>dotts.svg" alt="" class="dot">
                Дети -это самое необыкновенное и чудесное, что есть мире.
                <img src="<?=$imgPath?>dotts.svg" alt="" class="dot bott">
            </div>
        </div>
        <img src="<?=$imgPath?>cube1.png" alt="" class="cube1">
        <img src="<?=$imgPath?>cube2.png" alt="" class="cube2">
    </section>
    <section class="main__benefit">
        <div class="container text_fz30 text_ffAmat text_fw700 text_upper">
            <div class="main__benefit-item color1">
                <span>профессиональные <br>сотрудники</span>
                <img src="<?=$imgPath?>/benefit/benef1.png" alt="">
            </div>
            <div class="main__benefit-item color2">
                <span>комфортная <br>обстановка</span>
                <img src="<?=$imgPath?>/benefit/benef2.png" alt="">
            </div>
            <div class="main__benefit-item color3">
                <span>способные <br>детки</span>
                <img src="<?=$imgPath?>/benefit/benef3.png" alt="">
            </div>
        </div>
    </section>
    <section class="main__gallery">
        <div class="main__gallery-track">
            <div class="main__gallery-item"></div>
            <div class="main__gallery-item"></div>
            <div class="main__gallery-item"></div>
            <div class="main__gallery-item"></div>
            <div class="main__gallery-item"></div>
            <div class="main__gallery-item"></div>
            <div class="main__gallery-item"></div>
        </div>
    </section>
    <section class="main__works text_black">
        <div class="container">
            <h2 class="text_fz80 text_fw700 text_ffAmat">Интересные виды деятельности:</h2>
            <div class="main__works-row">
                <a href="" class="main__works-item color1">
                    <img src="<?=$imgPath?>/works/work1.png" alt="" class="main__works-item-image">
                    <h4 class="text_fz20 text_fw700">Группа кратковременного пребывания (с 1.5 лет-7 лет)</h4>
                    <div class="main__works-item-descr">
                        обеспечиваем всестороннее развитие, формируем основы школьного обучения, социализируем. Да и просто даем мамам отдохнуть и заняться своими делами. Потому что мы, как никто понимаем, если мама отдохнувшая это залог успешного воспитания и здоровой,счастливой семьи.
                    </div>
                    <div class="main__works-item-arrow">
                        <img src="<?=$imgPath?>arrow-right-short.svg" alt="">
                    </div>
                </a>
                <a href="" class="main__works-item back">
                    <img src="<?=$imgPath?>/works/work2.png" alt="" class="img_bg">
                    <h4 class="text_fz20 text_fw700">Музыкальная шкатулка для проверки</h4>
                    <div class="main__works-item-descr">
                        обеспечиваем всестороннее развитие, формируем основы школьного обучения, социализируем. Да и просто даем мамам отдохнуть и заняться своими делами. Потому что мы, как никто понимаем, если мама отдохнувшая это залог успешного воспитания и здоровой,счастливой семьи.    
                    </div>
                    <div class="main__works-item-arrow">
                        <img src="<?=$imgPath?>arrow-right-short.svg" alt="">
                    </div>
                </a>
                <a href="" class="main__works-item color2">
                    <img src="<?=$imgPath?>/works/work3.png" alt="" class="main__works-item-image">
                    <h4 class="text_fz20 text_fw700">Творческая лаборатория</h4>
                    <div class="main__works-item-descr">
                        обеспечиваем всестороннее развитие, формируем основы школьного обучения, социализируем. Да и просто даем мамам отдохнуть и заняться своими делами. Потому что мы, как никто понимаем, если мама отдохнувшая это залог успешного воспитания и здоровой,счастливой семьи.
                    </div>
                    <div class="main__works-item-arrow">
                        <img src="<?=$imgPath?>arrow-right-short.svg" alt="">
                    </div>
                </a>
                <a href="" class="main__works-item color3">
                    <img src="<?=$imgPath?>/works/work4.png" alt="" class="main__works-item-image">
                    <h4 class="text_fz20 text_fw700">Художественная комната</h4>
                    <div class="main__works-item-descr">
                        обеспечиваем всестороннее развитие, формируем основы школьного обучения, социализируем. Да и просто даем мамам отдохнуть и заняться своими делами. Потому что мы, как никто понимаем, если мама отдохнувшая это залог успешного воспитания и здоровой,счастливой семьи.
                    </div>
                    <div class="main__works-item-arrow">
                        <img src="<?=$imgPath?>arrow-right-short.svg" alt="">
                    </div>
                </a>
            </div>
            <div class="main__works-row three">
                <a href="" class="main__works-item color4">
                    <img src="<?=$imgPath?>/works/work3.png" alt="" class="main__works-item-image">
                    <h4 class="text_fz20 text_fw700">Английский язык</h4>
                    <div class="main__works-item-descr">
                        обеспечиваем всестороннее развитие, формируем основы школьного обучения, социализируем. Да и просто даем мамам отдохнуть и заняться своими делами. Потому что мы, как никто понимаем, если мама отдохнувшая это залог успешного воспитания и здоровой,счастливой семьи.
                    </div>
                    <div class="main__works-item-arrow">
                        <img src="<?=$imgPath?>arrow-right-short.svg" alt="">
                    </div>
                </a>
                <a href="" class="main__works-item color5">
                    <img src="<?=$imgPath?>/works/work3.png" alt="" class="main__works-item-image">
                    <h4 class="text_fz20 text_fw700">Подготовка к школе</h4>
                    <div class="main__works-item-descr">
                        обеспечиваем всестороннее развитие, формируем основы школьного обучения, социализируем. Да и просто даем мамам отдохнуть и заняться своими делами. Потому что мы, как никто понимаем, если мама отдохнувшая это залог успешного воспитания и здоровой,счастливой семьи.
                    </div>
                    <div class="main__works-item-arrow">
                        <img src="<?=$imgPath?>arrow-right-short.svg" alt="">
                    </div>
                </a>
                <a href="" class="main__works-item color6">
                    <img src="<?=$imgPath?>/works/work3.png" alt="" class="main__works-item-image">
                    <h4 class="text_fz20 text_fw700">Логопед</h4>
                    <div class="main__works-item-descr">
                        обеспечиваем всестороннее развитие, формируем основы школьного обучения, социализируем. Да и просто даем мамам отдохнуть и заняться своими делами. Потому что мы, как никто понимаем, если мама отдохнувшая это залог успешного воспитания и здоровой,счастливой семьи.
                    </div>
                    <div class="main__works-item-arrow">
                        <img src="<?=$imgPath?>arrow-right-short.svg" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="main__feedback">
        <div class="container">
            <div class="main__feedback-text">
                <h2 class="text_fz80 text_fw700 text_ffAmat text_black">Оставьте заявку <br>на консультацию</h2>
                <div class="main__feedback-descr text_fw500 text_fz16">
                    <b>Оставьте заявку</b>, администратор свяжется с вами, и подробно расскажет о деятельности нашего центра
                </div>
                <img src="<?=$imgPath?>rounded-arrow.svg" alt="">
            </div>
            <div class="main__form">
                <form action="">
                    <h3 class="text_fz30 text_fw700 text_ffAmat text_black">Запишитесь на пробное занятие:</h3>
                    <label for="feedname">
                        <span>Ваше имя</span>
                        <input type="text" name="feedname" id="feedname" placeholder="Например Иван" required>
                    </label>
                    <label for="feedphone">
                        <span>Ваш номер</span>
                        <input type="tel" name="feedphone" id="feedphone" placeholder="+7 (___) ___-__-__" required>
                    </label>
                    <label for="feedage">
                        <span>Возраст ребенка</span>
                        <input type="text" name="feedage" id="feedage" required>
                    </label>
                    <label for="feedhobby">
                        <span>Вид деятельности</span>
                        <input type="text" name="feedhobby" id="feedhobby" required>
                    </label>
                    <label for="feedcheck" class="checkbox text_fz12">
                        <input type="checkbox" name="feedcheck" id="feedcheck" required>
                        <div class="box">✓</div>
                        <div class="text">
                        Нажимая на кнопку “Отправить заявку”, вы соглашаетесь с <a href="/privacy/" class="text_underline">политикой конфиденциальности</a>
                        </div>
                    </label>
                    <button class="text_fz16 text_fw600 text_ffMont">Записаться</button>
                </form>
                <img src="<?=$imgPath?>girl.png" alt="" class="main__form-image">
            </div>
        </div>
    </section>
    <section class="main__rucovod">
        <img src="<?=$imgPath?>global-back.png" alt="" class="main__rucovod-back">
        <img src="<?=$imgPath?>footer-cloud.png" alt="" class="main__rucovod-cloud">
        <div class="main__rucovod-arcs">
            <img src="<?=$imgPath?>arc-rec1.png" alt="" class="light">
            <img src="<?=$imgPath?>arc-rec2.png" alt="" class="white">
        </div>
        <div class="main__rucovod-side">
            <img src="<?=$imgPath?>rucovod.png" alt="" class="main__rucovod-side-title">
            <div class="main__rucovod-side-text text_center">
                <span class="text_fz16">
                    <b>Дети</b> - это самое необыкновенное и чудесное, что есть в мире. Дети каждый день учат нас, а мы, в свою очередь, помогаем им принять информацию взрослого мира в доступной, комфортной и легкой форме. Мы знаем как сделать так, чтобы глаза ребенка блестели, а желание научиться росло с каждым днем.
                </span>
                <button class="text_fz16 text_fw600 text_ffMont">Консультация по выбору</button>
            </div>
        </div>
        <div class="main__rucovod-content text_center">
            <div class="container">
                <div class="main__rucovod-person">
                    <img src="<?=$imgPath?>plate.png" alt="" class="main__rucovod-person-plate left">
                    <img src="<?=$imgPath?>ruc1.png" alt="" class="main__rucovod-person-image">
                    <h5 class="text_fz20 text_fw600 text_black">
                        <img src="<?=$imgPath?>cloud-name.png" alt="">
                        <span>Кулютникова Анна <br>Сергеевна</span>
                    </h5>
                    <div class="main__rucovod-person-descr">
                        Сердце  нашего досугового центра РАЗВИТИЕ.  Четко распределяет свое время, ведет активный педагогический образ жизни. Целеустремленная,контактная,пунктуальная, воспитанная, добрая и прекрасная мама четверых детей. Педагог высшей квалификационной категории. Наличие трех высших педагогических образований. На этом не останавливается...
                    </div>
                </div>
                <div class="main__rucovod-person">
                    <img src="<?=$imgPath?>plate.png" alt="" class="main__rucovod-person-plate">
                    <img src="<?=$imgPath?>ruc2.png" alt="" class="main__rucovod-person-image right">
                    <h5 class="text_fz20 text_fw600 text_black">
                        <img src="<?=$imgPath?>cloud-name.png" alt="" class="right">
                        <span>Коваленко Елена <br>Александровна</span>
                    </h5>
                    <div class="main__rucovod-person-descr">
                        Сердце  нашего досугового центра РАЗВИТИЕ.  Четко распределяет свое время, ведет активный педагогический образ жизни. Целеустремленная,контактная,пунктуальная, воспитанная, добрая и прекрасная мама четверых детей. Педагог высшей квалификационной категории. Наличие трех высших педагогических образований. На этом не останавливается...
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main__map">
        <img src="<?=$imgPath?>footer-cloud.png" alt="" class="main__map-cloud">
        <div class="main__map-card" id="map"></div>
        <div class="container">
            <div class="main__form">
                <form action="">
                    <h3 class="text_fz30 text_fw700 text_ffAmat text_black">Запишитесь на пробное занятие:</h3>
                    <label for="feedname">
                        <span>Ваше имя</span>
                        <input type="text" name="feedname" id="feedname" placeholder="Например Иван" required>
                    </label>
                    <label for="feedphone">
                        <span>Ваш номер</span>
                        <input type="tel" name="feedphone" id="feedphone" placeholder="+7 (___) ___-__-__" required>
                    </label>
                    <label for="feedage">
                        <span>Возраст ребенка</span>
                        <input type="text" name="feedage" id="feedage" required>
                    </label>
                    <label for="feedhobby">
                        <span>Вид деятельности</span>
                        <input type="text" name="feedhobby" id="feedhobby" required>
                    </label>
                    <label for="feedcheck" class="checkbox text_fz12">
                        <input type="checkbox" name="feedcheck" id="feedcheck" required>
                        <div class="box">✓</div>
                        <div class="text">
                        Нажимая на кнопку “Отправить заявку”, вы соглашаетесь с <a href="/privacy/" class="text_underline">политикой конфиденциальности</a>
                        </div>
                    </label>
                    <button class="text_fz16 text_fw600 text_ffMont">Записаться</button>
                </form>
                <img src="<?=$imgPath?>girl.png" alt="" class="main__form-image">
            </div>
        </div>
        <img src="<?=$imgPath?>footer-cloud.png" alt="" class="main__map-cloud bott">
    </section>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=5727f775-e56b-498e-bb2a-a48a1702a7f7&lang=ru_RU" type="text/javascript"></script>
    <script>
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                center: [55.597342, 37.880734],
                zoom: 17
            }, {
                searchControlProvider: 'yandex#search'
            });

            myPlacemark = new ymaps.Placemark([55.597302, 37.876395], {
                hintContent: 'г. Лыткарино, 6 микрорайон, дом 33',
            }, {
                iconLayout: 'default#image',
                iconImageSize: [35, 48]
            });

            myMap.geoObjects.add(myPlacemark);
        });
    </script>
</main>
<?php get_footer(); ?>