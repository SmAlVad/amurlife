<?php

add_action( 'wp_enqueue_scripts', 'life_scripts' );

function life_scripts() {
	// подключаем файл стилей темы
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	// подключаем js файл темы
	wp_enqueue_script( 'common.min', get_template_directory_uri() .'/js/common.min.js', array(), '1.0', true );
}
