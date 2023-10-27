<section class="main__feedback">
    <div class="container">
        <div class="main__feedback-text">
            <h2 class="text_fz80 text_fw700 text_ffAmat text_black text_animate">Оставьте заявку на консультацию</h2>
            <div class="main__feedback-descr text_fw500 text_fz16 elem_animate top">
                <b>Оставьте заявку</b>, администратор свяжется с вами, и подробно расскажет о деятельности нашего центра
            </div>
            <img src="<?=get_template_directory_uri()?>/assets/images/rounded-arrow.svg" alt="rounded-arrow" class="elem_animate">
        </div>
        <div class="main__form elem_animate left" id="cons-event">
            <form action="<?=admin_url('admin-ajax.php')?>?action=feedback">
                <h3 class="text_fz30 text_fw700 text_ffAmat text_black text_animate">Не знаете какое направление подходит вашему ребенку?</h3>
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
                <button class="text_fz16 text_fw600 text_ffMont">Получить консультацию</button>
                <div class="success text_fz12">Спасибо! Ваше сообщение было отправлено</div>
            </form>
            <img src="<?=get_template_directory_uri()?>/assets/images/girl.png" alt="girl" class="main__form-image">
        </div>
    </div>
</section>