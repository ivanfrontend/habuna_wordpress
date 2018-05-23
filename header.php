<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description '); ?>">
    <meta name="author" content="">
    <title><?php bloginfo('name'); ?></title>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 <?php wp_head(); ?>
</head>
<body id="page-top">
    <div class="wrapp_global_top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-3 paddding_bottom10px mobile_logo">
                  <span class="masterNone color_logo">Dialrus</span>
                  <span class="logo_desc">компьютерный сервис</span>  
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 paddding_bottom10px mobail_ok">
                    <div class="wrapp_social">
                        <a href=""><span class="telegram"></span></a>
                        <a href=""><span class="viber"></span></a>
                        <a href=""><span class="skype"></span></a>
                    </div>     
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 paddding_bottom10px mobile_info">
                    <div class="wrapp_header_contact">
                        <div class="header_contact">
                            <span class="title_phone">Наши контакты:</span>
                            <?php if( ot_get_option('phone-header1')) {
                            $str = ot_get_option('phone-header1');
                            $result = preg_replace("/[^,.0-9]/", '', $str);
                                ?>
                            <span class="namber_phone"><a href="tel:+<?php echo $result ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo ot_get_option('phone-header1') ?></a></span>
                            <?php } ?>
                            <?php if(ot_get_option('phone-header2')) { 
                            $str2 = ot_get_option('phone-header2');
                            $result2 = preg_replace("/[^,.0-9]/", '', $str2);   
                            ?>
                            <span class="namber_phone"><a href="tel:+<?php echo $result2 ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo ot_get_option('phone-header2') ?></a></span>
                            <?php } ?>
                            <div>
                                <?php if(ot_get_option('time_worck')) { 
                                echo ot_get_option('time_worck');
                             } ?>
                             /
                              <?php if(ot_get_option('legal_adres')) { 
                                echo ot_get_option('legal_adres');
                             } ?>
                          </div>
                        </div>

                        <span class="burger">
                            <i class="fa fa-bars"></i>
                        </span>
                    </div>    
                </div>
                <div class="col-xs-6 col-sm-1 col-md-1 block_btn_top">
                    <a href="" class="my_btn_top" data-toggle="modal" data-target="#myModal">Заказать</a>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-2 paddding_bottom10px mobail_none">
                    <div class="wrapp_social">
                        <?php
                         if(ot_get_option(social_network_list)){ 
                            $social_network_list = ot_get_option(social_network_list);
                            foreach ($social_network_list as $value) {
                               if($value[social_network_upload] == 'telegram'){
                            ?>

                        <a href="tg://resolve?domain=<?php echo  $value[social_network_link]; ?>"><span class="<?php echo $value[social_network_upload]; ?>"></span></a>
                        <?php } ?>
                        <?php  if($value[social_network_upload] == 'viber'){ ?>
                        <a href="viber://add?number=<?php echo  $value[social_network_link]; ?>"><span class="<?php echo $value[social_network_upload]; ?>"></span></a>
                        <?php } ?>
                        <?php  if($value[social_network_upload] == 'skype'){ ?>
                        <a href="skype:<?php echo  $value[social_network_link]; ?>?chat"><span class="<?php echo $value[social_network_upload]; ?>"></span></a>
                        <?php } ?>
                        <!-- <a href=""><span class="viber"></span></a>
                        <a href=""><span class="skype"></span></a> -->
                        <?php } }  ?>
                    </div>     
                </div>
            </div>
        </div>
        <section class="menu_top">
            <div class="container">
                <div class="row">
                   <div class="col-xs-12 ">
                        <!-- <ul class="wrap_ul_menu">
                            <li>
                                <a class="page-scroll" href="#about">Наш магазин</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#services">Услуги</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#profi_room">Наша мастерская</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#pay">Способы оплаты</a>
                            </li>
                            
                            <li>
                                <a class="page-scroll" href="#my_portfolio">Наши работы</a>
                            </li> 
                            <li>
                                <a class="page-scroll" href="#reviewsabout">Отзывы</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#contact">Контакты</a>
                            </li>                    
                        </ul> --> 
                        <?php
                                        wp_nav_menu(array(
                  'menu'            => 'primary', 
                  'container'       => 'ul', 
                  'container_class' => '1', 
                  'container_id'    => '2',
                  'menu_class'      => 'wrap_ul_menu', 
                  'menu_id'         => '3',
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                  'before'          => '',
                  'after'           => '',
                  'link_before'     => '',
                  'link_after'      => '',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'depth'           => 2,
                  'walker'          => '',

                                          )); 
                                       ?>
                   </div>              
                </div>
            </div>
        </section>
    </nav>
</div>
    <?php if(ot_get_option('upload_fon_img')){ ?>
    <header style="background-image: url(<?php echo ot_get_option('upload_fon_img') ?>);">
        <?php } ?>
        <div class="header-content">
            <div class="header-content-inner">
                <?php if(ot_get_option('title_one_block')){ ?>
                <h1 id="homeHeading"><?php echo ot_get_option('title_one_block')  ?></h1>
                <?php } ?>                
                <hr class="hr_color_fff">
                <?php if(ot_get_option('description_one_block')){ ?>
                <?php echo ot_get_option('description_one_block') ?>
                <?php } ?>
                <a href="#about" class="my_style_btn btn btn-primary btn-xl page-scroll">Далее</a>
            </div>
        </div>
    </header>




<!-- Старый header -->


