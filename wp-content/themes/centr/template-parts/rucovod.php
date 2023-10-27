<section class="main__rucovod">
    <img src="<?=get_template_directory_uri()?>/assets/images/global-back.png" alt="global-back" class="main__rucovod-back">
    <div class="main__rucovod-arcs">
        <img src="<?=get_template_directory_uri()?>/assets/images/arc-rec1.png" alt="arc-rec1" class="light elem_animate top">
        <img src="<?=get_template_directory_uri()?>/assets/images/arc-rec2.png" alt="arc-rec2" class="white elem_animate top">
    </div>
    <div class="main__rucovod-side">
        <img src="<?=get_template_directory_uri()?>/assets/images/rucovod.png" alt="Руководители" class="main__rucovod-side-title elem_animate">
        <div class="main__rucovod-side-text text_center">
            <span class="text_fz16 elem_animate bott">
                <?=get_field('rucovod_main-text', 10)?>
            </span>
            <a href="#cons-event" class="button text_fz16 text_fw600 text_ffMont elem_animate top">Консультация по выбору</a>
        </div>
    </div>
    <div class="main__rucovod-content text_center">
        <div class="container">
            <div class="main__rucovod-person elem_animate top">
                <img src="<?=get_template_directory_uri()?>/assets/images/plate.png" alt="plate" class="main__rucovod-person-plate left">
                <img src="<?=get_template_directory_uri()?>/assets/images/ruc1.png" alt="Кулютникова Анна Сергеевна" class="main__rucovod-person-image">
                <h5 class="text_fz20 text_fw600 text_black">
                    <img src="<?=get_template_directory_uri()?>/assets/images/cloud-name.png" alt="cloud-name">
                    <span>Кулютникова Анна <br>Сергеевна</span>
                </h5>
                <div class="main__rucovod-person-descr">
                    <?=get_field('rucovod_descr1', 10)?>
                </div>
            </div>
            <div class="main__rucovod-person elem_animate top">
                <img src="<?=get_template_directory_uri()?>/assets/images/plate.png" alt="plate" class="main__rucovod-person-plate">
                <img src="<?=get_template_directory_uri()?>/assets/images/ruc2.png" alt="Коваленко Елена Александровна" class="main__rucovod-person-image right">
                <h5 class="text_fz20 text_fw600 text_black">
                    <img src="<?=get_template_directory_uri()?>/assets/images/cloud-name.png" alt="cloud-name" class="right">
                    <span>Коваленко Елена <br>Александровна</span>
                </h5>
                <div class="main__rucovod-person-descr">
                    <?=get_field('rucovod_descr2', 10)?>
                </div>
            </div>
        </div>
    </div>
</section>