<?php
function devops_demo_enqueue_styles() {
	wp_enqueue_style(
		'devops-demo-style',
		get_stylesheet_uri(),
		array(),
	);
}

add_action('wp_enquwuw_scripts', 'devops_demo_enqueue_styles');
