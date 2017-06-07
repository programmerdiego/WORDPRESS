/*
Theme Name: Diego Sanchez Theme 
Author: Diego Sanchez
Author URL: http://www.diegosanchez.info
Version: 1.0
*/

<?php
function dstheme_resources(){
	wp_enqueue_style('style', get_stylesheet_uri());
} 
/* This function includes the style sheet in the name */

add_action('wp_enqueue_scripts', 'dstheme_resources');
