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
        'label'       => 'Блок с ссылкой на основной сайт',
        'id'          => 'section_blok1_tab',
        'type'        => 'tab'
      ),

                array(
        'id'          => 'text_title_blok1',
        'label'       => 'Название блока',
        'desc'        => '',
        'type'        => 'text',
      ), 
                         array(
        'id'          => 'text_blok1',
        'label'       => 'описание',
        'desc'        => '',
        'type'        => 'textarea',
      ), 
                         array(
        'id'          => 'text_title_blok1_link',
        'label'       => 'ссылка на сайт',
        'desc'        => '',
        'type'        => 'text',
      ),




   array(
        'label'       => 'Настройка блока услуги',
        'id'          => 'section_blok1_1_tab',
        'type'        => 'tab'
      ),
                         
                             array(
        'id'          => 'text_title_blok1_1',
        'label'       => 'Название блока',
        'desc'        => 'Укажите название блока, например: Мы предлагаем следующие услуги',
        'type'        => 'text',
      ), 
                              array(
        'id'          => 'services_list',
        'label'       => 'Добовление услуги',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
            array(
        'id'          => 'icon_font',
        'label'       => 'Добавить иконку',
        'desc'        => 'Весь перечень иконок <a href="https://fontawesome.ru/all-icons/">тут</a>',
        'type'        => 'text',
      ), 
             array(
        'id'          => 'name_servises_list',
        'label'       => 'Название услуги',
        'desc'        => '',
        'type'        => 'text',
      ), 
              array(
        'id'          => 'deck_servises_list',
        'label'       => 'описание услуги',
        'desc'        => '',
        'type'        => 'text',
      ), 
              array(
        'id'          => 'pris_servises_list',
        'label'       => 'укажите цену',
        'desc'        => '',
        'type'        => 'text',
      ),

         ),
    
            ),

      array(
        'label'       => 'Настройка блока наша мастерская',
        'id'          => 'servis_room_tab',
        'type'        => 'tab'
      ),

      array(
        'id'          => 'name_block_servis_room',
        'label'       => 'Название',
        'desc'        => '',
        'type'        => 'text',
      ),

      array(
        'id'          => 'servis_room',
        'label'       => 'Добовление слайд с фото мастерской',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
            array(
        'id'          => 'photo_servis_room',
        'label'       => 'Загрузите картинку',
        'desc'        => '',
        'type'        => 'upload',
      ),

         ),
    
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
        'id'          => 'add_advantages',
        'label'       => 'Добавить преимущество',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(
            array(
        'id'          => 'icon_advantages',
        'label'       => 'Добавить иконку',
        'desc'        => 'Весь перечень иконок <a href="https://fontawesome.ru/all-icons/">тут</a>',
        'type'        => 'text',
      ), 
             array(
        'id'          => 'name_advantages',
        'label'       => 'Название преимущество',
        'desc'        => '',
        'type'        => 'text',
      ), 
              array(
        'id'          => 'deck_advantages',
        'label'       => 'описание преимущество',
        'desc'        => '',
        'type'        => 'text',
      ), 

         ),
    
            ),




  array(
        'label'       => 'Настройки блока отзывы',
        'id'          => 'section_blok4_tab',
        'type'        => 'tab'
      ), 

                               array(
        'id'          => 'photo_fon_block',
        'label'       => 'Загрузите фон блока',
        'desc'        => '',
        'type'        => 'upload',
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
