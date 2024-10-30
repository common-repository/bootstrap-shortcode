<?php


/**

Plugin Name: Bootstrap Shortcode
Plugin URI: https://wordpress.org/plugins/bootstrap-shortcode
Author: Shamim
Author URI: http://facebook.com/kvcmedia
version: 1.0
Description: This plugin will help you to create all future that include in bootstrap. 

**/
function bootstrap_shortcode(){
	wp_enqueue_style('bootstrap-css', plugins_url('css/bootstrap.css',__FILE__));
	wp_enqueue_style('bootstrap-theme', plugins_url('css/bootstrap-theme.css',__FILE__));
	wp_enqueue_script('bootstrap-jQuery',plugins_url('js/bootstrap.min.js',__FILE__));
}
add_action('wp_enqueue_scripts','bootstrap_shortcode');


function bootstrap_button($atts, $content){
	extract(
	shortcode_atts(array(
		'height' 	=> '30px',
		'width' 	=> '300px',
		'size'		=> '14px',
		'border'	=> '1px solid blue',
	), $atts));
	return '<input type="'.$content.'" style="height:'.$height.';font-size:'.$size.';border:'.$border.';width:'.$width.';">';
}
add_shortcode('box','bootstrap_button');

?>