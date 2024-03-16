<div class="main__form elem_animate left" id="<?=$args['id']?>">
    <form action="<?=admin_url('admin-ajax.php')?>?action=feedback">
        <h3 class="text_fz30 text_fw700 text_ffAmat text_black text_animate"><?=$args['title']?></h3>
        <label for="feedname">
            <span>Ваше имя</span>
            <input type="text" name="feedname" id="feedname" placeholder="Например Иван" required>
        </label>
        <label for="feedphone">
            <span>Ваш номер</span>
            <input type="tel" name="feedphone" id="feedphone" placeholder="+7 (___) ___-__-__" required>
        </label>
        <?php if (!$args['half']) : ?>
            <label for="feedage">
                <span>Возраст ребенка</span>
                <input type="text" name="feedage" id="feedage" required>
            </label>
            <label for="feedhobby">
                <span>Вид деятельности</span>
                <input type="text" name="feedhobby" id="feedhobby" required>
            </label>
        <?php endif; ?>
        <label for="feedcheck" class="checkbox text_fz12">
            <input type="checkbox" name="feedcheck" id="feedcheck" required>
            <div class="box">✓</div>
            <div class="text">
                Нажимая на кнопку “Отправить заявку”, вы соглашаетесь с <a href="/privacy/" class="text_underline">политикой конфиденциальности</a>
            </div>
        </label>
        <button class="text_fz16 text_fw600 text_ffMont"><?=$args['button']?></button>
    </form>
    <img src="<?=get_template_directory_uri()?>/assets/images/girl.png" alt="girl" class="main__form-image">
</div>