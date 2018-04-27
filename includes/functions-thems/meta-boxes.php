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
        'label'       => 'Настройка блока Скидка',
        'id'          => 'section_blok1_tab',
        'type'        => 'tab'
      ),

                array(
        'id'          => 'text_title_blok1',
        'label'       => 'Название блока',
        'desc'        => 'Укажите название блока, например: Скидки',
        'type'        => 'text',
      ), 
                         array(
        'id'          => 'text_blok1',
        'label'       => 'Текст акции',
        'desc'        => '',
        'type'        => 'textarea',
      ), 



        array(
        'label'       => 'Настройки блока наши приемущества',
        'id'          => 'section_blok2_tab',
        'type'        => 'tab'
      ),
                          array(
        'id'          => 'name_block_advantages',
        'label'       => 'Название блока',
        'desc'        => '',
        'type'        => 'text',
      ),
        array(
        'id'          => 'Our_advantages',
        'label'       => 'наши приемущества',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
          
                array(
        'id'          => 'ord_title',
        'label'       => 'Заголовок приемущества',
        'desc'        => '',
        'type'        => 'text',
      ),
                         array(
        'id'          => 'ord_description',
        'label'       => 'Текст приемущества',
        'desc'        => '',
        'type'        => 'textarea',
      ),
                   array(
        'id'          => 'Our_upload_fon',
        'label'       => 'Загрузите фоновую картинку',
        'desc'        => '',
        'type'        => 'upload',
      ),
         ),
    
            ),





         array(
        'label'       => 'Настройки блока объявления',
        'id'          => 'section_blok3_tab',
        'type'        => 'tab'
      ), 
                           array(
        'id'          => 'name_block_priziv',
        'label'       => 'Название блока',
        'desc'        => '',
        'type'        => 'text',
      ), 
                           array(
        'id'          => 'description_block_priziv',
        'label'       => 'Текст объявления',
        'desc'        => '',
        'type'        => 'textarea',
      ), 






  array(
        'label'       => 'Настройки блока отзывы',
        'id'          => 'section_blok4_tab',
        'type'        => 'tab'
      ), 

                    array(
        'id'          => 'name_block_mnenie',
        'label'       => 'Название блока',
        'desc'        => '',
        'type'        => 'text',
      ), 

                     array(
        'id'          => 'setings_list_mnenie',
        'label'       => 'Добавить отзыв',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
                    array(
        'id'          => 'photo_men',
        'label'       => 'Загрузите фото человека',
        'desc'        => '',
        'type'        => 'upload',
      ),
          
                array(
        'id'          => 'fio_list',
        'label'       => 'Указите Ф.И.О',
        'desc'        => '',
        'type'        => 'text',
      ),
                        array(
        'id'          => 'profi_puple',
        'label'       => 'Укажите професию',
        'desc'        => '',
        'type'        => 'text',
      ),
                         array(
        'id'          => 'text_mnenie',
        'label'       => 'Текст отзыва',
        'desc'        => '',
        'type'        => 'textarea',
      ),
         
         ),
    
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
  
  
}
