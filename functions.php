<?php
/*
	==========================================
	 Theme functions
	==========================================
*/

function planeta_theme_setup() {

add_theme_support('menus');

register_nav_menu('primary', 'Primary Header Navigation');
register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'planeta_theme_setup');