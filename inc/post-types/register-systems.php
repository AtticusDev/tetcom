<?php

$system = new CPT(array(
	'post_type_name' => 'system',
	'singular' => __('System', 'tetcom'),
	'plural' => __('Systems', 'tetcom'),
	'slug' => 'system'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
    'menu_icon' => 'dashicons-portfolio'
));