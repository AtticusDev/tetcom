<?php

$download = new CPT(array(
	'post_type_name' => 'download',
	'singular' => __('Download', 'tetcom'),
	'plural' => __('Downloads', 'tetcom'),
	'slug' => 'download'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'category'),
    'taxonomies' => array('category'),
    'menu_icon' => 'dashicons-format-aside'
));