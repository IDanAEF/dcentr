<section class="main__map">
    <img src="<?=get_template_directory_uri()?>/assets/images/footer-cloud.png" alt="footer-cloud" class="main__map-cloud">
    <div class="main__map-card" id="map"></div>
    <div class="container">
        <?php get_template_part('template-parts/form-default', null, [
            'title' => 'Запишитесь на пробное занятие',
            'id' => 'prob-event',
            'button' => 'Записаться'
        ]) ?>
    </div>
    <img src="<?=get_template_directory_uri()?>/assets/images/footer-cloud.png" alt="footer-cloud" class="main__map-cloud bott">
</section>