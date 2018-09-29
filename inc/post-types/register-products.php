<?php

$product = new CPT(array(
	'post_type_name' => 'product',
	'singular' => __('Product', 'tetcom'),
	'plural' => __('Products', 'tetcom'),
	'slug' => 'product'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
    'menu_icon' => 'dashicons-portfolio'
));