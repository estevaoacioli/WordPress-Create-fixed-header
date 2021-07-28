<?php
/*
 * Paste this code into the function.php file
 * Use get_stylesheet_directory_uri() in children themes
 * Use get_stylesheet_uri() in parent themes
*/
function eas_code_load_scripts(){
        
		// ********* Styles *****************
		
		wp_register_style('fixed_header', get_stylesheet_directory_uri() . '/css/style.css', false, false);		
		
		wp_enqueue_style('fixed_header');	
		
		
		
		// ********* Scripts *****************		
		
		wp_register_script('float', get_stylesheet_directory_uri() . '/js/float-panel.js', false, false, true);
		wp_register_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', false, false, true);
	
		wp_enqueue_script('jquery');
		wp_enqueue_script('float');
		wp_enqueue_script('custom');	
		
		
}
add_action('wp_enqueue_scripts', 'eas_code_load_scripts');

