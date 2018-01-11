<?php
//error_reporting(0);
define('BASE_URL', get_template_directory_uri());

add_theme_support('post-thumbnails');

$args = [
	'flex-width'    => true,
	'width' => 1920,
	'flex-height'    => true,
	'height' => 217,
	'default-image' => get_template_directory_uri() . '/images/bg.jpg',
	'uploads' => true,
];
add_theme_support('custom-header', $args);

add_image_size('gallery', 300, 200, true);


add_action('init', 'register_my_menus');

function register_my_menus() {
	if (function_exists('add_theme_support')) {
		add_theme_support('menus');
		register_nav_menu('header', 'Menu');
		register_nav_menu('top', 'Top');
	}
}


function soi_login_redirect($redirect_to, $request, $user) { 
  return (is_array($user->roles) && in_array('administrator', $user->roles)) ? admin_url() : site_url(); 
} 
add_filter('login_redirect', 'soi_login_redirect', 10, 3);

function choose_widgets_init() {

register_sidebar( 
	[
		'name' => 'Footer',
		'id' => 'footer-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	]);

register_sidebar(
	[
		'name' => 'Sidebar',
		'id' => 'sidebar-1',
		// 'before_widget' => '<div>', // Nahradí <li>
		// 'after_widget' => '</div>', // Nahradí </li>
		'before_title' => '<h3>', // Nahradí <h2>
		'after_title' => '</h3>', // Nahradí </h2>
	]);

}

add_action( 'widgets_init', 'choose_widgets_init' );

function clear_func( $atts ) {
	return "<br style=\"clear:both\">";
}

add_shortcode( 'clear', 'clear_func' );


function button_func( $atts ) {
	$text = $atts['text'];
	$url = $atts['url'];
  return '<a href="'.$url.'" class="button">'.$text.'</a>';
}

add_shortcode( 'button', 'button_func' );


function custom_length_excerpt($word_count_limit) {
	$content = wp_strip_all_tags(get_the_content() , true );
	echo wp_trim_words($content, $word_count_limit);
}

function custom_service_excerpt($content, $word_count_limit) {
	//$content = wp_strip_all_tags(get_the_content() , true );
	echo wp_trim_words($content, $word_count_limit);
}

function new_excerpt_more( $more ) {
	return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');



function wpb_list_child_pages($pid) {	   
	  global $post;
	   
	  
	  if( $post->post_parent != 0 ) {
		  $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0&depth=1' );
	  }
	   
	  if ( $childpages ) {
	   
		  $string = $childpages;
	  } else {
		  if( $post->post_parent != 0 ) { $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0&depth=1' ); }
		  $string = $childpages;
	  }
	   
	 return $string;
	  
	}
	  
	add_shortcode('wpb_childpages', 'wpb_list_child_pages');

	function wpb_list_child_pages_list($pid) {
	   
	  global $post;

	  $childs = get_pages('child_of='.$pid);
	  
	  if( count( $childs ) != 0 ) { 
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $pid . '&echo=0&depth=1' );
	   } else {

		  if($post->post_parent != 0) {$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0&depth=1' );}

	   }
	   
	  //$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $pid . '&echo=0&depth=1' );
	   
	  if ( $childpages ) {
	   
		  $string = $childpages;
	  } 
	   
	 return $string;
	  
	}
	  
	



	function get_category_id($id){
	  if(function_exists('icl_object_id')) {
		return icl_object_id($id,'category',true);
	  } else {
		return $id;
	  }
	}

	function get_page_id($id){
	  if(function_exists('icl_object_id')) {
		return icl_object_id($id,'page',true);
	  } else {
		return $id;
	  }
	}

	function get_post_id($id){
	  if(function_exists('icl_object_id')) {
		return icl_object_id($id,'post',true);
	  } else {
		return $id;
	  }
	}



?>
