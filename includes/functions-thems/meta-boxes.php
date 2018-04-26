<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */

    
    //страница "главная"
  $home_page_prokat = array(
    'id'          => 'home_page_prokat',
    'title'       => 'Настройки главной страницы',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
       
        array(
        'id'          => 'slaider_list',
        'label'       => 'Слайдер очков',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
             array(
        'id'          => 'slaider_upload',
        'label'       => 'Загрузите картинку',
        'desc'        => '',
        'type'        => 'upload',
      ),
                array(
        'id'          => 'slaider_text',
        'label'       => 'Укажите цену, например: 500.руб',
        'desc'        => '',
        'type'        => 'text',
      ),
         ),
    
            ),
            array(
        'id'          => 'all-post-battan',
        'label'       => 'ссылка на страницу ГАЛЕРЕЯ ОПРАВ "Посмотреть все"" под слайдером',
        'desc'        => '',
        'type'        => 'text',
      ), 

           array(
        'label'       => 'Посмотреть все акции',
        'id'          => 'all_shares_tab',
        'type'        => 'tab'
      ),
              array(
        'id'          => 'bg_img_shares',
        'label'       => 'Загрузить фоновую картинку',
        'desc'        => '',
        'type'        => 'upload',
      ),
            array(
        'id'          => 'text_shares',
        'label'       => 'текст в блоке',
        'desc'        => '',
        'type'        => 'text',
      ),
               array(
        'id'          => 'link_shares',
        'label'       => 'Ссылка на страницу акции',
        'desc'        => '',
        'type'        => 'text',
      ),

          array(
        'label'       => '4-новости',
        'id'          => 'post_tab',
        'type'        => 'tab'
      ),
          array(
        'id'          => 'post_select1',
        'label'       => 'Выберите пост 1-го блока',
        'desc'        => '',
        'type'        => 'post-select',
      ),
             array(
        'id'          => 'img_select1',
        'label'       => 'Загрузите картинку',
        'desc'        => '',
        'type'        => 'upload',
      ),
                array(
        'id'          => 'post_select2',
        'label'       => 'Выберите пост 2-го блока',
        'desc'        => '',
        'type'        => 'post-select',
      ),
             array(
        'id'          => 'img_select2',
        'label'       => 'Загрузите картинку',
        'desc'        => '',
        'type'        => 'upload',
      ),
                     array(
        'id'          => 'post_select3',
        'label'       => 'Выберите пост 3-го блока',
        'desc'        => '',
        'type'        => 'post-select',
      ),
             array(
        'id'          => 'img_select3',
        'label'       => 'Загрузите картинку',
        'desc'        => '',
        'type'        => 'upload',
      ),
                     array(
        'id'          => 'post_select4',
        'label'       => 'Выберите пост 4-го блока',
        'desc'        => '',
        'type'        => 'post-select',
      ),
             array(
        'id'          => 'img_select4',
        'label'       => 'Загрузите картинку',
        'desc'        => '',
        'type'        => 'upload',
      ),
                   array(
        'id'          => 'all-staid-battan11',
        'label'       => 'ссылка на страницу статей "Больше интересной информации"',
        'desc'        => '',
        'type'        => 'text',
      ),
                       array(
        'label'       => 'Карта наши магазины',
        'id'          => 'map-all-shop',
        'type'        => 'tab'
      ),
                       array(
        'id'          => 'js-map-all-shop',
        'label'       => 'Вставьте код',
        'desc'        => '',
        'type'        => 'textarea',
      ),  


        array(
        'label'       => 'Настройки банера',
        'id'          => 'setings-baner',
        'type'        => 'tab'
      ),  

       array(
        'id'          => 'img-baner',
        'label'       => 'Загрузите картинку',
        'desc'        => '',
        'type'        => 'upload',
      ), 
               array(
        'label'       => 'Текст банера',
        'id'          => 'text-baner',
        'type'        => 'text'
      ), 

         array(
        'label'       => 'Ссылка на страницу акции',
        'id'          => 'link-baner',
        'type'        => 'text'
      ), 
        array(
        'label'       => 'Как изготавливают очки',
        'id'          => 'praktik',
        'type'        => 'tab'
      ),
                   array(
        'id'          => 'praktik-blok',
        'label'       => 'Вставьте код или текст',
        'desc'        => 'Для создания заголовка используйте тег "h2". Остальной контент необходимо обернуть в тег "p"',
        'type'        => 'textarea',
      ),
        array(
        'label'       => 'SEO',
        'id'          => 'seo_home',
        'type'        => 'tab'
      ),
                 array(
        'id'          => 'title-home',
        'label'       => 'Ведите title страницы',
        'desc'        => '',
        'type'        => 'text',
      ),
                          array(
        'id'          => 'description-home',
        'label'       => 'Ведите description страницы',
        'desc'        => '',
        'type'        => 'text',
      ),

            ),
       );
//страница "галерея оправ"
  $catalog_page = array(
    'id'          => 'catalog_page_prokat',
    'title'       => 'Настройки страницы каталога',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
        array(
        'label'       => 'Настройка двойного слайдера',
        'id'          => 'catalog_slider_tab',
        'type'        => 'tab'
      ),
         array(
        'id'          => 'catalog_slider_list1',
        'label'       => 'Слайдер 1',
        'desc'        => 'В параметр title укажите alt и title картинки',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
   array(
        'id'          => 'catalog_slider_upload1',
        'label'       => 'Загрузите картинку',
        'desc'        => '',
        'type'        => 'upload',
      ),
                array(
        'id'          => 'catalog_slider_price1',
        'label'       => 'Укажите цену, например: 500.руб',
        'desc'        => '',
        'type'        => 'text',
      ),
            )
            ),
         array(
        'id'          => 'catalog_slider_list2',
        'label'       => 'Слайдер 2',
        'desc'        => ' В параметр title укажите alt картинки',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
   array(
        'id'          => 'catalog_slider_upload2',
        'label'       => 'Загрузите картинку',
        'desc'        => '',
        'type'        => 'upload',
      ),
                array(
        'id'          => 'catalog_slider_price2',
        'label'       => 'Укажите цену, например: 500.руб',
        'desc'        => '',
        'type'        => 'text',
      ),
            )
            ),




       array(
        'label'       => 'Настройка блока Оправы для детей',
        'id'          => 'children_slider_tab',
        'type'        => 'tab'
      ), 

       array(
        'id'          => 'children_name_blok',
        'label'       => 'Укажите название блока например "Оправы для детей"',
        'desc'        => '',
        'type'        => 'text',
      ),
      
         array(
        'id'          => 'children_slider_list',
        'label'       => 'Слайдер Оправы для детей',
        'desc'        => ' В параметр title укажите alt картинки',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
   array(
        'id'          => 'children_slider_upload',
        'label'       => 'Загрузите картинку',
        'desc'        => '',
        'type'        => 'upload',
      ),
                array(
        'id'          => 'children_slider_price',
        'label'       => 'Укажите цену, например: 500.руб',
        'desc'        => '',
        'type'        => 'text',
      ),
            )
            ),

       array(
        'label'       => 'SEO',
        'id'          => 'seo_home',
        'type'        => 'tab'
      ),
                 array(
        'id'          => 'title-home',
        'label'       => 'Ведите title страницы',
        'desc'        => '',
        'type'        => 'text',
      ),
                          array(
        'id'          => 'description-home',
        'label'       => 'Ведите description страницы',
        'desc'        => '',
        'type'        => 'text',
      ),

            )
            );






       // страница поста
 $post_page = array(
    'id'          => 'post_page',
    'title'       => 'Настройки страницы статьи',
    'desc'        => '',
    'pages'       => array( 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
     
    array(
        'id'          => 'privu_post',
        'label'       => 'Вставьте текст',
        'desc'        => 'Вставьте текст который будет выводиться на странице "Статьи".',
        'type'        => 'textarea',
      ),
     array(
        'label'       => 'SEO',
        'id'          => 'seo_home',
        'type'        => 'tab'
      ),
                 array(
        'id'          => 'title-home',
        'label'       => 'Ведите title страницы',
        'desc'        => '',
        'type'        => 'text',
      ),
                          array(
        'id'          => 'description-home',
        'label'       => 'Ведите description страницы',
        'desc'        => '',
        'type'        => 'text',
      ),
      )

    );
// 

 $page_all_post = array(
    'id'          => 'page_all_post',
    'title'       => 'Настройки страницы статьи',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(

     array(
        'label'       => 'SEO',
        'id'          => 'seo_home',
        'type'        => 'tab'
      ),
                 array(
        'id'          => 'title-home',
        'label'       => 'Ведите title страницы',
        'desc'        => '',
        'type'        => 'text',
      ),
                          array(
        'id'          => 'description-home',
        'label'       => 'Ведите description страницы',
        'desc'        => '',
        'type'        => 'text',
      ),
      )

    );



  $page_def = array(
    'id'          => 'page_def',
    'title'       => 'Настройки страницы статьи',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
     
     array(
        'label'       => 'SEO',
        'id'          => 'seo_home',
        'type'        => 'tab'
      ),
                 array(
        'id'          => 'title-home',
        'label'       => 'Ведите title страницы',
        'desc'        => '',
        'type'        => 'text',
      ),
                          array(
        'id'          => 'description-home',
        'label'       => 'Ведите description страницы',
        'desc'        => '',
        'type'        => 'text',
      ),
      )

    );


    $contacts = array(
    'id'          => 'contacts_eurooptict',
    'title'       => 'Настройки страницы Контактов',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
     
     array(
        'label'       => 'SEO',
        'id'          => 'seo_home',
        'type'        => 'tab'
      ),
                 array(
        'id'          => 'title-home',
        'label'       => 'Ведите title страницы',
        'desc'        => '',
        'type'        => 'text',
      ),
                          array(
        'id'          => 'description-home',
        'label'       => 'Ведите description страницы',
        'desc'        => '',
        'type'        => 'text',
      ),
      )

    );


  // конец страницы контактов
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
  $post_id = isset( $_GET['post']) ? $_GET['post'] : (isset($_POST['post_ID']) ? $_POST['post_ID'] : 0);
  $template_file = get_post_meta($post_id, '_wp_page_template', TRUE);
  if( $template_file == 'index.php'){
    
    ot_register_meta_box( $home_page_prokat );
  }
  if( $template_file == 'glasses-galleri.php'){
    
    ot_register_meta_box( $catalog_page );
  }
   if( $template_file == 'post.php'){
    
    ot_register_meta_box( $post_page );
  }
  if( $template_file == 'contacts.php'){
    
    ot_register_meta_box( $contacts );
  }
   if( $template_file == 'page-all-post.php'){
    
    ot_register_meta_box( $page_all_post );
  }
   if( $template_file == 'page-def.php'){
    
    ot_register_meta_box( $page_def );
  }
  
  
}
