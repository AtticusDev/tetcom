<?php

$video = new CPT(array(
	'post_type_name' => 'video',
	'singular' => __('Video', 'tetcom'),
	'plural' => __('Video', 'tetcom'),
	'slug' => 'video'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields'),
    'menu_icon' => 'dashicons-format-video'
));