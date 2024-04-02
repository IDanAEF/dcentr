<div class="main__form elem_animate left" id="<?=$args['id']?>">
    <form action="<?=admin_url('admin-ajax.php')?>?action=feedback">
        <h3 class="text_fz30 text_fw700 text_ffAmat text_black text_animate"><?=$args['title']?></h3>
        <label>
            <span>Ваше имя</span>
            <input type="text" name="feedname" placeholder="Например Иван" required>
        </label>
        <label>
            <span>Ваш номер</span>
            <input type="tel" name="feedphone" placeholder="+7 (___) ___-__-__" required>
        </label>
        <?php if (!$args['half']) : ?>
            <label>
                <span>Возраст ребенка</span>
                <input type="text" name="feedage" required>
            </label>
            <label>
                <span>Вид деятельности</span>
                <input type="text" name="feedhobby" required>
            </label>
        <?php endif; ?>
        <label class="checkbox text_fz12">
            <input type="checkbox" name="feedcheck" required>
            <div class="box">✓</div>
            <div class="text">
                Нажимая на кнопку “Отправить заявку”, вы соглашаетесь с <a href="/privacy/" class="text_underline">политикой конфиденциальности</a>
            </div>
        </label>
        <button class="text_fz16 text_fw600 text_ffMont"><?=$args['button']?></button>

        <input type="text" name="recaptcha" hidden>
    </form>
    <img src="<?=get_template_directory_uri()?>/assets/images/girl.png" alt="girl" class="main__form-image">
</div>