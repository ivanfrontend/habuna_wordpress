<?php
/**
 * Template name: Главная
 */
get_header();
?>



<div id="about" class="global"></div>
    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center text-center">
                    <?php
                     // if(ot_get_option('primer')||){ 
                        ?>
                    <h2 class="section-heading"><a class="section-heading hov_for_1z" href="http://1z.by/">1Z.BY</a></h2>
                    <hr class="light">
                    <p class="text-faded" style="font-size:18px;">Наш интернет-магазин в котором вы найдете все необходимые комплектующие для вашего компьютера!</p>
                    <a href="http://1z.by/" target="_blank" class="btn btn-default btn-xl sr-button my_button_zakaz" >Перейти</a>
                    <?php // } ?>
                </div>
            </div>
        </div>
    </section>


    <?php  ?>

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

    <div id="services" class="global"></div>
    <section id="services">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Мы предлагаем следующие услуги</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">



            <div class="row my_heit">
                <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-cog text-primary sr-icons fa-television" aria-hidden="true"></i>
                        <h3>Ремонт компьютеров</h3>
                        <p class="text-muted">Бесплатная диагностика и поиск неисправностей </p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                    <div class="linebottom"></div>
                </div>

                <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-cog text-primary sr-icons"></i>
                        <h3>Диагностика неисправностей</h3>
                        <p class="text-muted">Бесплатная диагностика ипоиск неисправностей </p>
                    </div>
                    <p class=" prise_servis"> от 25 руб</p>
                    <a href="" class="btn btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center q1">
                    <div class="service-box">
                        <i class="fa fa-4x fa-search text-primary sr-icons"></i>
                        <h3>Профилактика</h3>
                        <p class="text-muted">Проверка компонентов компьютера или ноутбука </p>
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
              


        </div>
    </section>

        </div>
    </section>
    <div id="profi_room" class="global"></div>
    <section>
       <div class="container-fluid">
           <div class="row">
               <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Наша мастерская</h2>
                    <hr class="primary">
                </div>
                </div>
                <div class="col-lg-12">
                <div class="wrap_main">
                    <div>
                        <img src="img/room/2.png">
                    </div>
                    <div>
                        <img src="img/room/2.png">
                    </div>
                    <div>
                        <img src="img/room/3.png">
                    </div>
                    <div>
                        <img src="img/room/4.png">
                    </div>
                    <div>
                        <img src="img/room/5.png">
                    </div>
                    <div>
                        <img src="img/room/5.png">
                    </div>
                    <div>
                        <img src="img/room/2.png">
                    </div>
                    <div>
                        <img src="img/room/3.png">
                    </div>
               </div>
           </div>
       </div> 
    </section>
    <!-- <aside class="bg-dark">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">По статистике 1 из 10</h2>
                    <hr class="light">
                    <p class="text-faded2">
                       поломок вашего устройста решается по телефону с нашим консультантом    
                    </p>
                    <a href="" class="descktop_block btn btn-default btn-xl sr-button my_button_zakaz  btn-xl sr-button" data-toggle="modal" data-target="#myModal">Закажите консультацию</a>
                    <a href="tel:+375298488855" class=" mobile_phone btn btn-default btn-xl sr-button my_button_zakaz" >Звоните</a>
                </div>
            </div>
        </div>
    </aside> -->
    <div id="portfolio" class="global"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Наши приемущества</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
          <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                        <div class="icon_heading">
                           <i class="fa fa-subway" aria-hidden="true"></i>
                        </div>
                        <div class="heading_title">
                           Удобное расположение              
                        </div> 
                        <div class="heading_text">
                            Мы находимся в 5 минутах хотьбы от станции метро Пралетарская.
                        </div>
                </div> 
                <div class="col-lg-3 col-md-6">
                        <div class="icon_heading">
                          <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                        </div>
                        <div class="heading_title">
                            Вызов мастера на дом            
                        </div> 
                        <div class="heading_text">
                            В нашей мастерской вы можете вызвать мастера на дом.
                        </div>
                </div> 
                <div class="col-lg-3 col-md-6">
                        <div class="icon_heading">
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <div class="heading_title">
                             Только качественная работа           
                        </div> 
                        <div class="heading_text">
                            Восстановление данных, установка программ, чистка от пыли, и многое другое.  
                        </div>
                </div> 
                <div class="col-lg-3 col-md-6">
                        <div class="icon_heading">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                        </div>
                        <div class="heading_title">
                            Модернизируем ваш компьютер              
                        </div> 
                        <div class="heading_text">
                          Заберем ваши старые комплектующие взамен на новые при ремонтре вашего устройства у нас в мастерской. 
                        </div>
                </div>        
            </div>
        </div>
    </section>
    
    <div id="pay" class="global"></div>
     <?php $photo_fon_block_pay = get_post_meta( $post->ID, 'photo_fon_block_pay', true); ?>
      <section class="bg-form" style="background:url('<?php echo $photo_fon_block_pay ?>') repeat scroll 0 0" class="row contentRowPad">
    <!-- <section class="bg-form"> -->
        <div class="container">
            <div class="row" >
                <div class="col-xs-12">

                    <?php 
                $name_block_pay = get_post_meta( $post->ID, 'name_block_pay', true);
                if($name_block_pay){
             ?>
                <h3 class="bg-form-title"><?php echo $name_block_pay ?></h3>
            <?php }else{ ?>
                <h3 class="bg-form-title">Способы оплаты</h3>
            <?php } ?>
                </div>
                <div class="col-xs-12">
                    <div class="bg-form-line"></div>
                </div>
                <div class="col-xs-12">
                     <?php 
                $desc_block_pay = get_post_meta( $post->ID, 'desc_block_pay', true);
                if($desc_block_pay){
             ?>
                <p class="bg-form-text"><?php echo $desc_block_pay ?></p>
            <?php }else{ ?>
                <p class="bg-form-text">Мы предлагаем вам следубщие способы оплаты</p>
            <?php } ?>


                   <!--  <p class="bg-form-text">Мы предлагаем вам следубщие способы оплаты</p> -->
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-6 text_center">

                        <?php    
                                $photo_img1_block_pay = get_post_meta( $post->ID, 'photo_img1_block_pay', true);
                                if($photo_img1_block_pay){
                             ?>
                                <img src="<?php echo $photo_img1_block_pay ?>">
                                
                            <?php }else{ ?>
                             <img src="http://habuna.loc/wp-content/uploads/2018/05/money.png">
                            
                            <?php } ?>

                             <?php    
                                $desc_block_pay_img = get_post_meta( $post->ID, 'desc_block_pay_img', true);
                                if($desc_block_pay_img){
                             ?>
                                <h4><?php echo $desc_block_pay_img ?></h4>
                                
                            <?php }else{ ?>
                             <h4>Наличными</h4>
                            <?php } ?>
                       
                       
                    </div>
                    <div class="col-xs-6  text_center">
                        
                         <?php    
                                $photo_img2_block_pay = get_post_meta( $post->ID, 'photo_img2_block_pay', true);
                                if($photo_img2_block_pay){
                             ?>
                                <img src="<?php echo $photo_img2_block_pay ?>">
                                
                            <?php }else{ ?>
                             <img src="http://habuna.loc/wp-content/uploads/2018/05/credit-card.png">
                            
                            <?php } ?>
                            
                         

                             <?php    
                                $desc_block_pay_img2 = get_post_meta( $post->ID, 'desc_block_pay_img2', true);
                                if($desc_block_pay_img2){
                             ?>
                                <h4><?php echo $desc_block_pay_img2 ?></h4>
                                
                            <?php }else{ ?>
                             <h4>Безналичный НДС-ЭСЧФ</h4>
                            <?php } ?>   

                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <div id="my_portfolio" class="global"></div>

    <section>
        <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="defaultOtst">
                    <?php 
                $name_block_work = get_post_meta( $post->ID, 'name_block_work', true);
                if($name_block_work){
             ?>
            <div class="TextAbout2 ourServ">
                <h2><?php echo $name_block_work ?></h2>
                <hr class="primary">
            </div>
            <?php }else{ ?>
             <div class="TextAbout2 ourServ">
                <h2>Наши выполненные работы</h2>
                <hr class="primary">
            </div>
            <?php } ?>
                <!-- <h2>Наши выполненные работы</h2> -->
                                
                <div class="Wrappmain">
                    <div class="main_two">
                        <div class="container">
                            <div class="row otstRow">
                                <div class="col-sm-6">
                                    <h3>до</h3>
                                    <div class="imgAvatar">
                                                         
                                                         <?php 
                                    $setings_list_kartinka = get_post_meta( $post->ID, 'setings_list_kartinka', true);
                                    if($setings_list_kartinka){
                                    foreach ($setings_list_kartinka as $key => $val) {        
                                 ?>
                                            <img src="<?php echo $val[photo_compDO] ?>" alt="">
                                        <?php } }?>


                                        <!-- <img src="img/do.png" alt="avatar"> -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h3>после</h3>
                                    <div class="imgAvatar">
                                         
                                          <?php 
                                    $setings_list_kartinka = get_post_meta( $post->ID, 'setings_list_kartinka', true);
                                    if($setings_list_kartinka){
                                    foreach ($setings_list_kartinka as $key => $val) {        
                                 ?>
                                            <img src="<?php echo $val[photo_compPOSLE] ?>" alt="">
                                        <?php } } ?>
                                        <!-- <img src="img/posle.png" alt="avatar"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                                


          <!--                   <div class="container">
                            <div class="row otstRow">
                                <div class="col-sm-6">
                                    <h3>до</h3>
                                    <div class="imgAvatar">
                                        <img src="img/do2.png" alt="avatar">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h3>после</h3>
                                    <div class="imgAvatar">
                                        <img src="img/posle2.png" alt="avatar">
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="container">
                            <div class="row otstRow">
                                <div class="col-sm-6">
                                    <h3>до</h3>
                                    <div class="imgAvatar">
                                        <img src="img/posle3.png" alt="avatar">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h3>после</h3>
                                    <div class="imgAvatar">
                                        <img src="img/do3.png" alt="avatar">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="reviewsabout" class="global"></div>
    </section>

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


            </div>
        </div>
    </section>

    <!-- ОТЗЫВЫ  END-->
<?php if(ot_get_option('lat') && ot_get_option('lng')){ ?>
    <div id="map" style="height: 450px">
        
    </div>
    <script>
      function initMap() {
        var uluru = {lat: <?php echo ot_get_option('lat') ?>, lng: <?php echo ot_get_option('lng') ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <?php } ?>


  

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Контакты</h2>
                    <hr class="primary">
                    <!-- <p>Ассоциация Компьютерных Мастеров</p> -->
                </div>
                <div class="col-lg-12 text-center">
                    <?php if(ot_get_option('email_adres')) {
                            ?>  
                    <a class="btn btn-xl sr-button" href="mailto:<?php echo ot_get_option('email_adres'); ?>" style=" box-shadow: inset 0 3px 5px rgba(0,0,0,0); margin-left: 10px; font-size:16px;"><i class="fa fa-envelope-o fa-3x sr-contact"></i><br /><?php echo ot_get_option('email_adres'); ?></a>
                    <?php } ?>
                    <?php if(ot_get_option('phone-header1')) {
                            $str = ot_get_option('phone-header1');
                        $result = preg_replace("/[^,.0-9]/", '', $str);
                            ?>                  
                    <a class="btn btn-xl sr-button" href="tel:+<?php echo $result ?>" style="box-shadow: inset 0 3px 5px rgba(0,0,0,0); font-size:16px;"><i class="fa fa-phone fa-3x sr-contact"></i><br /><?php echo ot_get_option('phone-header1'); ?></a>
                    <?php } ?> 
                     <?php if(ot_get_option('phone-header2')) {
                            $str2 = ot_get_option('phone-header2');
                        $result2 = preg_replace("/[^,.0-9]/", '', $str2);
                            ?>                                         
                    <a class="btn btn-xl sr-button" href="tel:+<?php echo $result2 ?>" style="box-shadow: inset 0 3px 5px rgba(0,0,0,0); font-size:16px;"><i class="fa fa-phone fa-3x sr-contact"></i><br /><?php echo ot_get_option('phone-header2') ?></a>
                    <?php } ?>
                     <?php if(ot_get_option('legal_adres')) {
                            ?> 
                    <a class="btn btn-xl sr-button" style="box-shadow: inset 0 3px 5px rgba(0,0,0,0); font-size:16px; white-space: normal; width: 224px;"><i class="fa fa-map-marker fa-3x sr-contact" aria-hidden="true"></i><br /><?php echo ot_get_option('legal_adres'); ?></a>  <?php } ?>                                        
                </div>
            </div>
        </div>
    </section>
   
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog" style="top:25%;">
        <div class="modal-dialog">
            <form id="form" class="form-horizontal">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="text-align: center;">                        
                        <h4 class="modal-title">Заказать сейчас</h4>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <!-- Text input-->
                        <div class="form-group">
                            <!--<label class="col-md-4 control-label" for="textinput">Имя</label>-->
                            <div class="col-md-12">
                                <input id="name" name="name" type="text" placeholder="Имя" class="form-control input-md" required="">                            
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <!--<label class="col-md-4 control-label" for="textinput">Телефон</label>-->
                            <div class="col-md-12">
                                <input id="phone" name="phone" type="text" placeholder="Телефон" class="form-control input-md" required=""> 
                                <span id="wrongPhone" class="help-block" style="display:none; color:darkred;">Некорректный номер телефона!</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="text-align: center;">
                        <input name="submit" type="submit" class="btn btn-default" value="ОТПРАВИТЬ" />
                    </div>
                </div>
            </form>
        </div>
    </div>


<!-- старое подключение -->

 <!-- Подключение блока акция -->
<?php // require( trailingslashit( get_template_directory() ) . 'parts/block-shares.php' );  ?>
 <!-- Конец подключение блока акция -->


  <!-- Подключение блока наши услуги -->
<?php // require( trailingslashit( get_template_directory() ) . 'parts/block-servises.php' );  ?>
 <!-- Конец подключение блока наши услуги -->


  <!-- Подключение блока наши преемущества -->
<?php // require( trailingslashit( get_template_directory() ) . 'parts/block-advantages.php' );  ?>
 <!-- Конец подключение блока наши преемущества -->


    <!-- Подключение блока объявления -->
<?php // require( trailingslashit( get_template_directory() ) . 'parts/block-priziv.php' );  ?>
 <!-- Конец подключение блока объявление -->


   <!-- Подключение блока тзывы -->
<?php // require( trailingslashit( get_template_directory() ) . 'parts/block-mnenie.php' );  ?>
 <!-- Конец подключение блока отзывы -->

<?php
get_footer();
?>
