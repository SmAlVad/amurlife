<?php

add_action( 'wp_enqueue_scripts', 'life_scripts' );
add_action("after_setup_theme", "life_after_setup");
add_action("widgets_init", "right_widgets");

add_filter("widget_text","do_shortcode");
add_shortcode("most_viewed","most_viewed");

function life_scripts() {
	// подключаем файл стилей темы
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	// подключаем js файл темы
	wp_enqueue_script( 'common.min', get_template_directory_uri() .'/js/common.min.js', array(), '1.0', true );
}

function life_after_setup()
{
	register_nav_menu("top", "Верхнее меню");
	register_nav_menu("left", "Левое меню");
	register_nav_menu("mob-m", "Мобильное меню");

	add_theme_support("post-thumbnails");
	add_theme_support("title-tag");
	add_theme_support("custom-logo");
}

function right_widgets()
{
	register_sidebar([
		"name" => "RightSidebar",
		"id" => "right_sidebar",
		"description" => "",
		"before_widget" => "<div class='text'>",
		"after_widget" => "</div>",
		"before_title" => "<span>",
		"after_title" => "</span>",
	]);
}

// Тут надо реализовать выборку самых популярных постов за день
function most_viewed(){

	$result = "";

	// параметры по умолчанию
	$args = array(
		'numberposts' => 5,
		'orderby'     => 'date',
		'order'       => 'DESC',
		'post_type'   => 'post',
		'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
	);

	$posts = get_posts( $args );

	foreach($posts as $post){

		setup_postdata($post);

		$link = get_the_permalink($post);
		$title = get_the_title($post);

		$result .= "<a href='$link'>$title</a>";
	}

	wp_reset_postdata(); // сброс

	return $result;
}