<section class="main__reviews">
    <img src="<?=get_template_directory_uri()?>/assets/images/footer-cloud.png" alt="footer-cloud" class="main__rucovod-cloud">
    <div class="container">
        <img src="<?=get_template_directory_uri()?>/assets/images/reviews/review-image.png" alt="Отзывы" class="main__reviews-image">
        <h2 class="text_fz80 text_fw700 text_ffAmat text_black text_animate">Отзывы</h2>
        <div class="main__reviews-content">
            <div class="main__reviews-media elem_animate right">
                <?php if (get_field('reviews_video-youtube', 10) || get_field('reviews_video-file', 10)) : ?>
                    <div class="main__reviews-media-watch">
                        Посмотрите видеоотзыв о нас
                        <img src="<?=get_template_directory_uri()?>/assets/images/wave.svg" alt="wave">
                    </div>
                    <?php if (get_field('reviews_video-file', 10)) : ?>
                    <video src="<?=get_field('reviews_video-file', 10)?>" muted="muted" preload="metadata" controls></video>
                    <?php else : ?>
                    <?=get_field('reviews_video-youtube', 10)?>
                    <?php endif; ?>
                <?php endif; ?>
                <div class="main__reviews-audio">
                    <div class="main__reviews-audio-watch">
                        Послушайте, что о нас говорят
                        <img src="<?=get_template_directory_uri()?>/assets/images/wave.svg" alt="wave">
                    </div>
                    <?php
                        while(have_rows('reviews_audio', 10)) {
                            the_row();
                            ?>
                            <div class="main__reviews-audio-item">
                                <div class="main__reviews-audio-image">
                                    <img src="<?=get_sub_field('photo')['url']?>" alt="<?=get_sub_field('name')?>" class="img_bg">
                                </div>
                                <div class="main__reviews-audio-name text_fz20">
                                    <?=get_sub_field('name')?>
                                </div>
                                <div class="main__reviews-audio-control audio-control">
                                    <audio src="<?=get_sub_field('file')?>"></audio>
                                    <div class="main__reviews-audio-btn audio-btn">
                                        <img src="<?=get_template_directory_uri()?>/assets/images/play.svg" alt="play" class="play">
                                        <img src="<?=get_template_directory_uri()?>/assets/images/stop.svg" alt="stop" class="stop">
                                    </div>
                                    <div class="main__reviews-audio-line audio-line">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <?php if (get_field('reviews_main', 10)) : ?>
            <div class="main__reviews-slider elem_animate left">
                <div class="main__reviews-slider-track">
                    <div class="main__reviews-slider-watch">
                        Прочитайте, что нам пишут
                        <img src="<?=get_template_directory_uri()?>/assets/images/wave.svg" alt="wave">
                    </div>
                    <img src="<?=get_template_directory_uri()?>/assets/images/reviews/phone-body.png" alt="phone-body" class="main__reviews-slider-phone">
                    <img src="<?=get_template_directory_uri()?>/assets/images/reviews/phone-head.png" alt="phone-head" class="main__reviews-slider-head">

                    <?php
                        foreach(get_field('reviews_main', 10) as $key => $image) {
                            ?>
                            <img src="<?=$image['url']?>" alt="<?=$image['alt'] ?: 'Отзыв - '.$key?>" class="review">
                            <?php
                        }
                    ?>
                </div>
                <div class="main__reviews-slider-arrows">
                    <img src="<?=get_template_directory_uri()?>/assets/images/arrow-left.svg" alt="left" class="left">
                    <img src="<?=get_template_directory_uri()?>/assets/images/arrow-right.svg" alt="right" class="right">
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>