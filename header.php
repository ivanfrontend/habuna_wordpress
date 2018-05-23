<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ремонт компьютерoв и ноутбуков в Минске</title>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                            <span class="namber_phone"><a href="tel:+375296276977"><i class="fa fa-phone" aria-hidden="true"></i>+375 (29) 627-69-77</a></span>
                            <span class="namber_phone"><a href="tel:+375298488855"><i class="fa fa-phone" aria-hidden="true"></i>+375 (29) 848-88-55</a></span>
                            <div>График работы: 10:00 - 18:00 пн - пт / п-р Партизанский 8.,корп. 15 ком. 104.</div>
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
                        <a href=""><span class="telegram"></span></a>
                        <a href=""><span class="viber"></span></a>
                        <a href=""><span class="skype"></span></a>
                    </div>     
                </div>
            </div>
        </div>
        <section class="menu_top">
            <div class="container">
                <div class="row">
                   <div class="col-xs-12 ">
                        <ul class="wrap_ul_menu">
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
                        </ul> 
                   </div>              
                </div>
            </div>
        </section>
    </nav>
</div>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Ремонт компьютеров и ноутбуков в Минске</h1>                
                <hr class="hr_color_fff">
                <p>Мы предоставляем качественный, быстрый и не дорогой сервис по обслуживанию компьютеров и ноутбуков</p>
                <a href="#about" class="my_style_btn btn btn-primary btn-xl page-scroll">Далее</a>
            </div>
        </div>
    </header>




<!-- Старый header -->
<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri().'/assets/img/favicon.png';?>">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>
<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Главное</span> меню <i class="fa fa-bars"></i>
                </button>

                <?php if( ot_get_option('name_phone_section')) { ?>
                <a class="navbar-brand"><?php echo ot_get_option('name_phone_section') ?> 
                	<?php }else{ ?>
                		<a class="navbar-brand">Вызвать мастера:
                	<?php }?>
                	<?php if( ot_get_option('phone-header1')) { 
                		$str = ot_get_option('phone-header1');
						$result = preg_replace("/[^,.0-9]/", '', $str);
                		?>

                	<a class="navbar-brand" href="tel:+<?php echo $result ?>"><?php echo ot_get_option('phone-header1') ?></a>
                	<?php }else{ ?> 
                	<a class="navbar-brand" href="tel:+375298488855">+375 (29) 848-88-55</a>
                	<?php }?>
                	<?php if(ot_get_option('phone-header2')) { 
                		$str2 = ot_get_option('phone-header2');
						$result2 = preg_replace("/[^,.0-9]/", '', $str2);	
                		?>
                	<a class="navbar-brand" href="+<?php echo $result2 ?>"><?php echo ot_get_option('phone-header2') ?></a>
                	<?php }else{ ?> 
                	<a class="navbar-brand" href="tel:+375296276977">+375 (29) 627-69-77</a>
                	<?php }?>
                	</a>                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
                <!-- <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Скидки</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Услуги</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Наши приемущества</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Контакты</a>
                    </li>                    
                </ul> -->
				                 <?php
				                        wp_nav_menu(array(
				  'menu'            => 'primary', 
				  'container'       => 'div', 
				  'container_class' => 'collapse navbar-collapse', 
				  'container_id'    => 'bs-example-navbar-collapse-1',
				  'menu_class'      => 'nav navbar-nav navbar-right', 
				  'menu_id'         => '',
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
           <!--  </div> -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <?php if(ot_get_option('upload_fon_img')){ ?>
    <header style="background-image: url(<?php echo ot_get_option('upload_fon_img') ?>);">
    	<?php }else{ ?>
    	<header style="background-image: url(<?php echo get_template_directory_uri(). '/assets/img/header.png'?>);">
    		<?php } ?>
        <div class="header-content">
            <div class="header-content-inner">
            	<?php if(ot_get_option('title_one_block')){ ?>
                <h1 id="homeHeading"><?php echo ot_get_option('title_one_block')  ?></h1>
                <?php }else{ ?>  
                <h1 id="homeHeading">Ремонт компьютеров и ноутбуков в Минске</h1>
                <?php } ?>              
                <hr>
                <?php if(ot_get_option('description_one_block')){ ?>
                <?php echo ot_get_option('description_one_block') ?>
                <?php }else{ ?> 
                <p>Мы предоставляем качественный, быстрый и не дорогой сервис по обслуживанию компьютеров и ноутбуков</p>
                <?php } ?> 
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Далее</a>
            </div>
        </div>
    </header>

