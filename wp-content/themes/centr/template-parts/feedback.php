<section class="main__feedback">
    <div class="container">
        <div class="main__feedback-text">
            <h2 class="text_fz80 text_fw700 text_ffAmat text_black text_animate">Оставьте заявку на консультацию</h2>
            <div class="main__feedback-descr text_fw500 text_fz16 elem_animate top">
                <b>Оставьте заявку</b>, администратор свяжется с вами, и подробно расскажет о деятельности нашего центра
            </div>
            <img src="<?=get_template_directory_uri()?>/assets/images/rounded-arrow.svg" alt="rounded-arrow" class="elem_animate">
        </div>
        <?php get_template_part('template-parts/form-default', null, [
            'title' => 'Не знаете какое направление подходит вашему ребенку?',
            'id' => 'cons-event',
            'button' => 'Получить консультацию'
        ]) ?>
    </div>
</section>