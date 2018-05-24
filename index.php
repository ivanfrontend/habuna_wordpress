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
                    $text_title_blok1 = get_post_meta( $post->ID, 'text_title_blok1', true);
                    $text_blok1 = get_post_meta( $post->ID, 'text_blok1', true);
                    $text_title_blok1_link = get_post_meta( $post->ID, 'text_title_blok1_link', true);
                     if( $text_title_blok1 || $text_blok1 || $text_title_blok1_link){ 
                        ?>
                    <h2 class="section-heading"><a class="section-heading hov_for_1z" href="<?php echo $text_title_blok1_link ?>"><?php echo $text_title_blok1 ?></a></h2>
                    <hr class="light">
                    <p class="text-faded" style="font-size:18px;"><?php echo $text_blok1 ?></p>
                    <a href="<?php echo $text_title_blok1_link ?>" target="_blank" class="btn btn-default btn-xl sr-button my_button_zakaz" >Перейти</a>
                    <?php  } ?>
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
                        <h3><?php echo $value[name_servises_list]; ?></h3>
                        <p class="text-muted"><?php echo $value[deck_servises_list]; ?></p>
                    </div>
                    <p class=" prise_servis"> <?php echo $value[pris_servises_list]; ?></p>
                    <a href="" class="btn btn-xl sr-button" data-toggle="modal" data-target="#myModal">Заказать!</a>
                    <div class="linebottom"></div>
                </div>
                    <?php } } ?>
                <script >
                 // Добовление класа для блока услуги
                    jQuery('#services i').addClass('text-primary sr-icons');
                    // конец  
                </script>
        </div>
    </section>

        </div>
    </section>
        </div>
    </section>
    <div id="profi_room" class="global"></div>
    <section>
       <div class="container-fluid">
           <div class="row">
               <div class="col-lg-12 text-center">
                <?php
                $name_block_servis_room = get_post_meta( $post->ID, 'name_block_servis_room', true);
                    if($name_block_servis_room){
                 ?>
                    <h2 class="section-heading"><?php echo $name_block_servis_room ?></h2>
                    <?php } ?>
                    <hr class="primary">
                </div>
                </div>
                <div class="col-lg-12">
                <div class="wrap_main">
                    <?php 
                    $servis_room = get_post_meta( $post->ID, 'servis_room', true);
                    if($servis_room){
                        foreach ($servis_room as $value) {
                    ?>
                    <div>
                        <img src="<?php echo $value[photo_servis_room]; ?>">
                    </div>
                    <?php } } ?>
                   
               </div>
           </div>
       </div> 
    </section>
    <div id="portfolio" class="global"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php 
                        $name_block_advantages = get_post_meta( $post->ID, 'name_block_advantages', true);
                    if($name_block_advantages){
                     ?>
                    <h2 class="section-heading"><?php echo $name_block_advantages ?></h2>
                    <?php } ?>
                    <hr class="primary">
                </div>
            </div>
        </div>
          <div class="container">
            <div class="row">
                <?php 
                        $add_advantages = get_post_meta( $post->ID, 'add_advantages', true);
                    if($add_advantages){
                        foreach ($add_advantages as $value) {
                          
                     ?>
                <div class="col-lg-3 col-md-6">
                        <div class="icon_heading">
                          <?php echo $value[icon_advantages]; ?>
                        </div>
                        <div class="heading_title">
                           <?php echo $value[name_advantages]; ?>             
                        </div> 
                        <div class="heading_text">
                            <?php echo $value[deck_advantages]; ?>
                        </div>
                </div> 
                <?php } } ?>       
            </div>
        </div>
    </section>
    <div id="pay" class="global"></div>
    <section class="bg-form">
        <div class="container">
            <div class="row" >
                <div class="col-xs-12">
                    <h3 class="bg-form-title">Способы оплаты</h3>
                </div>
                <div class="col-xs-12">
                    <div class="bg-form-line"></div>
                </div>
                <div class="col-xs-12">
                    <p class="bg-form-text">Мы предлагаем вам следубщие способы оплаты</p>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-6 text_center">
                        <img src="img/money.png">
                        <h4>Наличными</h4>
                    </div>
                    <div class="col-xs-6  text_center">
                        <img src="img/credit-card.png">
                        <h4>Безналичный НДС-ЭСЧФ</h4>
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
                 <div class="TextAbout2 ourServ">
                <h2>Наши выполненные работы</h2>
                <hr class="primary">
                </div>
                <div class="Wrappmain">
                    <div class="main_two">
                        <div class="container">
                            <div class="row otstRow">
                                <div class="col-sm-6">
                                    <h3>до</h3>
                                    <div class="imgAvatar">
                                        <img src="img/do.png" alt="avatar">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h3>после</h3>
                                    <div class="imgAvatar">
                                        <img src="img/posle.png" alt="avatar">
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="container">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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


                <ul class="nav nav-tabs wrapp_tabs" role="tablist" id="testiTab">
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
