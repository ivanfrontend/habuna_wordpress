<?php
// Вная подключение темоптион

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );
/**
 * Show New Layout
 */
 add_filter( 'ot_show_new_layout', '__return_false' );
 /**
 * Show Settings Pages
 */
 add_filter( 'ot_show_pages', '__return_false' );

 	function theme_options_parent($parent){
 		$parent= '';
 		return $parent;
 	}
 	add_filter('ot_theme_options_parent_slug', 'theme_options_parent', 20);

/**
 * Required: include OptionTree.
 */

require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . 'includes/functions-thems/meta-boxes.php' );
require( trailingslashit( get_template_directory() ) . 'includes/functions-thems/theme-options.php' );
// Конец Вная подключение темоптион



// Подключение меню

function shabuna_menu_setup(){

    register_nav_menu('primary', 'primary menu');

}

add_action('after_setup_theme', 'shabuna_menu_setup');

// Конец подключение меню




// Подключение виджетов
require get_template_directory() . '/includes/Widgets.php';
// конец

// подключение стилей
require get_template_directory() . '/includes/style.php';
//  конец

// подключение скриптов
require get_template_directory() . '/includes/scripts.php';
// конец

// require get_template_directory() . '/inc/custom-header.php';

show_admin_bar(false);


//  is_active_sidebar( 'sidebar-1' ) Если надо проверить на активность
//  dynamic_sidebar( 'sidebar-1' ); Сам вывод виджетов