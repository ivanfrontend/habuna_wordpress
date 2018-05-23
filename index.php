<?php
/**
 * Template name: Главная
 */
get_header();
?>
<?php
$text_title_blok1 = get_post_meta( $post->ID, 'text_title_blok1', true);
$text_blok1 = get_post_meta( $post->ID, 'text_blok1', true);
 ?>
 <?php if($text_title_blok1 && $text_blok1){ ?>
<section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center text-center">
                    <h2 class="section-heading"><?php
                    if($text_title_blok1){
                     echo $text_title_blok1;
                        }else{
                      ?> 
                    Скидка
                    <?php } ?>
                  </h2>
                    <hr class="light">
                    <p class="text-faded" style="font-size:18px;">
                        <?php
                    if($text_blok1){
                     echo $text_blok1;
                        }else{
                      ?> 
                    При оформлении заказа на ремонт через сайт, Вы  получаете <span style="font-size:25px;">скидку 10%</span>!
                   <?php } ?>
                    </p>
                    <a href="" class="btn btn-default btn-xl sr-button my_button_zakaz" data-toggle="modal" data-target="#myModal">Заказать!</a>
                </div>
            </div>
        </div>
    </section>

    <?php } ?>

     <?php 
        $bg_mass=[];
        $background_block = get_post_meta( $post->ID, 'background_block', true);
        foreach ($background_block   as $key => $value) {
            $bg_mass[] = $value;
        }
        ?>
        <?php
        if($background_block){
            if( empty( $bg_mass[5] ) ){
        
        ?>              
    <section style="background:<?php echo $bg_mass[0]; ?>" id="services">
        <?php }else{ ?>
        <section style="background-repeat: <?php echo $bg_mass[1] ?>;background-position: <?php echo $bg_mass[3] ?> ; background-size: <?php echo $bg_mass[4] ?>; background:url( <?php echo $bg_mass[5]; ?>);" id="services">
            <?php } }else{ ?>
            <section  id="services">
            <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php $text_title_blok1_1 = get_post_meta( $post->ID, 'text_title_blok1_1', true); ?>
                    <?php if($text_title_blok1_1 ){ ?>
                    <h2 class="section-heading"><?php echo $text_title_blok1_1 ?></h2>
                    <?php } ?>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">

               

            <div class="row my_heit">

                    <?php 
                    $services_list = get_post_meta( $post->ID, 'services_list', true);
                        if($services_list){
                            foreach ($services_list  as  $value) {

                     ?>
                <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <?php echo $value[icon_font]; ?>
                        <h3>Ремонт компьютеров</h3>
                        <p class="text-muted">Бесплатная диагностика, поиск неисправностей в аппаратных и программных компонентов компьютеров или ноутбуков</p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                    <div class="linebottom"></div>
                </div>
                    <?php } } ?>
<script >
 // Добовление класа для блока услуги
    jQuery('#services i').addClass('text-primary sr-icons');
    // конец  
</script>


               <!--  <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-cog text-primary sr-icons fa-laptop" aria-hidden="true"></i>
                        <h3>Ремонт ноутбуков</h3>
                        <p class="text-muted">Бесплатная диагностика, поиск неисправностей в аппаратных и программных компонентов компьютеров или ноутбуков</p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                    <div class="linebottom"></div>
                </div>
                <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-cog text-primary sr-icons"></i>
                        <h3>Диагностика неисправностей</h3>
                        <p class="text-muted">Бесплатная диагностика, поиск неисправностей в аппаратных и программных компонентов компьютеров или ноутбуков</p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-search text-primary sr-icons"></i>
                        <h3>Профилактика</h3>
                        <p class="text-muted">Проверка компонентов компьютера или ноутбука на работоспособность, отказоустойчивость, шумоизоляцию, теплопроводность</p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-wrench text-primary sr-icons"></i>
                        <h3>Ремонт</h3>
                        <p class="text-muted">Мелкий ремонт, замена устройств, ремонт комьютеров, ремонт ноутбуков</p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-eraser text-primary sr-icons"></i>
                        <h3>Уборка</h3>
                        <p class="text-muted">Чистка компьютеров или ноутбуков от пыли, смазка вентиляторов, замена термопасты</p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                </div> -->





                <!-- <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-list-alt text-primary sr-icons"></i>
                        <h3>Покупка</h3>
                        <p class="text-muted">Помощь в выборе компьютера или ноутбука, сопровождение при покупке, оптовые закупка техники для организаций, закупка комплектующих, переферия, ПО и другое</p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn  btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Доставка</h3>
                        <p class="text-muted">Доставка нового компьютера или ноутбука, доставка в СЦ по гарантии (для более детального / сложного ремонта)</p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-th text-primary sr-icons"></i>
                        <h3>Сборка</h3>
                        <p class="text-muted">Сборка нового компьютера, сборка компьютера из подходящих комплектующих, сборка под заказ</p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn  btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-power-off  text-primary sr-icons"></i>
                        <h3>Установка</h3>
                        <p class="text-muted">Установка операционных систем Windows, драйверов, программ, начальная настройка компьютера или ноутбука, подключение к WI-FI или интернет</p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn  btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                </div> -->





 
                <!-- <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>АутСорсинг</h3>
                        <p class="text-muted">Модернизация компьютеров или ноутбуков, абоненское обслуживание по выгодным ценам, подключение переферии или других новых устройств</p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn  btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-indent text-primary sr-icons"></i>
                        <h3>Восстановление</h3>
                        <p class="text-muted">Диагностика восстановление файлов с жестких и съемных носителей информации</p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn  btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-shield text-primary sr-icons"></i>
                        <h3>Защита</h3>
                        <p class="text-muted">Поиск и удаление вредоносных, рекламных, шпионских программ (вирусов, троянов, баннеров), установка антивируса, настройка защиты</p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn  btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-info text-primary sr-icons"></i>
                        <h3>Онлайн помощь</h3>
                        <p class="text-muted">Телефонная и удалённое техническое обслуживание, удалённое подключение к клиенту, устранение неполадок</p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn  btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                </div>
            </div> -->




        </div>
    </section>
    <?php 
    $our_advantages = get_post_meta( $post->ID, 'Our_advantages', true);
    $name_block_advantages = get_post_meta( $post->ID, 'name_block_advantages', true);
    if($our_advantages && $name_block_advantages){     ?>
    <section class="no-padding" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
                    <?php if($name_block_advantages){ ?>
                    <?php echo $name_block_advantages; ?>
                    <?php }else{ ?>
                    Наши приемущества</h2>
                    <?php } ?>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">

                <?php 
                
                     
                     if($our_advantages){
                        foreach ($our_advantages as  $value) {
                    
                ?>

                 <div class="col-lg-3 col-sm-3">                    
                    <div data-toggle="tooltip" data-placement="bottom" class="master portfolio-box" >
                         <div class="project-category text-faded">
                                    <?php echo $value[ord_title]; ?>
                                </div>
                        <img src="<?php echo $value[Our_upload_fon]; ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                
                                <div class="project-name">
                                    <?php echo $value[ord_description]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } } ?>

            </div>
        </div>
    </section>
<?php } ?>
<?php
$name_block_priziv = get_post_meta( $post->ID, 'name_block_priziv', true);
$description_block_priziv = get_post_meta( $post->ID, 'description_block_priziv', true);
 if( $name_block_priziv || $description_block_priziv){ ?>
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?php echo $name_block_priziv ?></h2>
                    <hr class="light">
                    <p class="text-faded2" style="text-align:left;">
                        <?php echo $description_block_priziv ?>
                    </p>
                </div>
            </div>
        </div>
    </aside>
<?php } ?>

      <!-- ОТЗЫВЫ -->
        <?php $photo_fon_block = get_post_meta( $post->ID, 'photo_fon_block', true); ?>
      <section id="testimonialTabs" style="background:url('<?php echo $photo_fon_block ?>') repeat scroll 0 0" class="row contentRowPad">
        <div class="container">
            <?php 
                $name_block_mnenie = get_post_meta( $post->ID, 'name_block_mnenie', true);
                if($name_block_mnenie){
             ?>
            <div class="row sectionTitle">
                <h3 class="reviews"><?php echo $name_block_mnenie ?></h3>
            </div>
            <?php }else{ ?>
             <div class="row sectionTitle">
                <h3 class="reviews">Наши отзывы</h3>
            </div>
            <?php } ?>
            <div class="row">


         



                <ul class="nav nav-tabs" role="tablist" id="testiTab">
                <?php 
                $setings_list_mnenie = get_post_meta( $post->ID, 'setings_list_mnenie', true);
                if($setings_list_mnenie){
                foreach ($setings_list_mnenie as $key => $val) {
                       
             ?>
                    <li role="presentation" class="my_class_none"><a href="#testi<?php echo $key ?>" aria-controls="testi<?php echo $key ?>" role="tab" data-toggle="tab">
                        <img src="<?php echo $val[photo_men] ?>" alt="">
                    </a></li>
                    <?php } ?>
                </ul>

                <div class="tab-content testiTabContent">
                      <?php 
                $setings_list_mnenie = get_post_meta( $post->ID, 'setings_list_mnenie', true);
                foreach ($setings_list_mnenie as $key => $val) {
             ?>
                    <div role="tabpanel" class="tab-pane" id="testi<?php echo $key ?>">
                        <h5 class="customerName"><?php echo $val[fio_list] ?></h5>
                        <h5 class="customerType"><?php echo $val[profi_puple] ?></h5>
                        <p><?php echo $val[text_mnenie] ?></p>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>



















<!--                 <ul class="nav nav-tabs" role="tablist" id="testiTab">
                    <li role="presentation" class="active"><a href="#testi1" aria-controls="testi1" role="tab" data-toggle="tab">
                        <img src="img/2.png" alt="">
                    </a></li>
                    <li role="presentation"><a href="#testi2" aria-controls="testi2" role="tab" data-toggle="tab">
                        <img src="img/2.png" alt="">
                    </a></li>
                    <li role="presentation"><a href="#testi3" aria-controls="testi3" role="tab" data-toggle="tab">
                        <img src="img/2.png" alt="">
                    </a></li>
                    <li role="presentation"><a href="#testi4" aria-controls="testi4" role="tab" data-toggle="tab">
                        <img src="img/2.png" alt="">
                    </a></li>
                    <li role="presentation"><a href="#testi5" aria-controls="testi5" role="tab" data-toggle="tab">
                        <img src="img/2.png" alt="">
                    </a></li>
                </ul>

                <div class="tab-content testiTabContent">
                    <div role="tabpanel" class="tab-pane active" id="testi1">
                        <h5 class="customerName">Иван Волков</h5>
                        <h5 class="customerType">Веб-разработчик</h5>
                        <p>“ FurnitureHouse is really excellent site for furnitures. I am very happy with the FurnitureHouse products and dedicated services from them. FurnitureHouse is really excellent site for furnitures. ”</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="testi2">
                        <h5 class="customerName">Dwayne johnson</h5>
                        <h5 class="customerType">happy customer</h5>
                        <p>“ FurnitureHouse is really excellent site for furnitures. I am very happy with the FurnitureHouse products and dedicated services from them. FurnitureHouse is really excellent site for furnitures. ”</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="testi3">
                        <h5 class="customerName">Dwayne johnson</h5>
                        <h5 class="customerType">happy customer</h5>
                        <p>“ FurnitureHouse is really excellent site for furnitures. I am very happy with the FurnitureHouse products and dedicated services from them. FurnitureHouse is really excellent site for furnitures. ”</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="testi4">
                        <h5 class="customerName">Dwayne johnson</h5>
                        <h5 class="customerType">happy customer</h5>
                        <p>“ FurnitureHouse is really excellent site for furnitures. I am very happy with the FurnitureHouse products and dedicated services from them. FurnitureHouse is really excellent site for furnitures. ”</p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="testi5">
                        <h5 class="customerName">Dwayne johnson</h5>
                        <h5 class="customerType">happy customer</h5>
                        <p>“ FurnitureHouse is really excellent site for furnitures. I am very happy with the FurnitureHouse products and dedicated services from them. FurnitureHouse is really excellent site for furnitures. ”</p>
                    </div>
                </div> -->



            </div>
        </div>
    </section>









<?php
get_footer();
?>
