<?php
    get_header();
    
    $imgPath = get_template_directory_uri().'/assets/images/';
?>
<main class="error404">
    <img src="<?=$imgPath?>main-back.png" alt="main-back" class="error404__back img_bg">
    <img src="<?=$imgPath?>footer-cloud.png" alt="footer-cloud" class="main__map-cloud bott">
    <div class="main__promo-arcs">
        <img src="<?=$imgPath?>main-arc-rec1.png" alt="main-arc-rec1" class="light desk">
        <img src="<?=$imgPath?>main-arc-rec1-mobile.png" alt="main-arc-rec1-mobile" class="light mobile">
        <img src="<?=$imgPath?>main-arc-rec2.png" alt="main-arc-rec2" class="white desk">
        <img src="<?=$imgPath?>main-arc-rec2-mobile.png" alt="main-arc-rec2-mobile" class="white mobile">
    </div>
    <div class="error404__text text_center">
        <h1 class="text_ffAmat text_fw700 text_black text_animate">404</h1>
        <span class="text_fz18 text_fw700">Ой...что-то пошло не так</span>
        <a href="/" class="button text_fz16 text_fw600">На главную</a>
        <img src="<?=$imgPath?>rounded-arrow2.svg" alt="rounded-arrow2">
    </div>
    <img src="<?=$imgPath?>owl-big.png" alt="owl-big" class="error404__owl elem_animate top">
    <img src="<?=$imgPath?>cube1.png" alt="cube1" class="main__promo-cube1 top-to-bott">
    <img src="<?=$imgPath?>cube2.png" alt="cube2" class="main__promo-cube2 top-to-bott high">
</main>
<?php
    get_footer();
?>