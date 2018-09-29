<?php

$quote = new CPT(array(
	'post_type_name' => 'service',
	'singular' => __('Service', 'tetcom'),
	'plural' => __('Services', 'tetcom'),
	'slug' => 'service'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
    'menu_icon' => 'dashicons-portfolio'
));