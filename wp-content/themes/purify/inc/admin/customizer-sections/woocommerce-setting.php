<?php
$woocommerce->addSubSection( array(
	'name'     => 'Setting',
	'id'       => 'woo_setting',
	'position' => 3,
 ) );

$woocommerce->createOption( array(
	'name' => 'Column',
	'id' => 'woo_product_column',
	'type' => 'select',
	//'desc' => 'Insert the number of posts to display per page.',
	'options' => array(
		'4' => '3',// column bootstrap
		'3' => '4',
	),
) );
$woocommerce->createOption( array(
	'name' => 'Number of Products per Page',
	'id' => 'woo_product_per_page',
	'type' => 'number',
	'desc' => 'Insert the number of posts to display per page.',
	'default' => '8',
	'max' => '100',
) );

$woocommerce->createOption( array(
	'name'    => 'Effect Image',
	'id'      => 'woo_set_effect',
	'type'    => 'select',
	'options' => array(
		'zoom_out' => 'Zoom Out',
	    'popup_images' => 'Popup',
 	),
	'default'=>'zoom_out'
) );
//$woocommerce->createOption( array(
//	'name'    => 'Style Show Description',
//	'id'      => 'woo_set_desc_style',
//	'type'    => 'select',
//	'options' => array(
//		'style_accordion' => 'Accordion',
//	    'style_tab' => 'Tab',
// 	),
//	'default'=>'style_tab'
//) );

//$woocommerce->createOption( array(
//	'name'    => 'Product Hover',
//	'id'      => 'woo_set_hover_item',
//	'type'    => 'select',
//	'options' => array(
//		'changeimages' => 'Change Images',
//	    'flip_back' => 'Flip Back',
// 	),
//	'default'=>'changeimages'
//) );
//$woocommerce->createOption( array(
//	'name'    => 'CSS Animation',
//	'id'      => 'woo_set_animation',
//	'type'    => 'select',
//	'options' => array(
//		'' => 'No',
//	    'animated' => 'ScaleIn Effect',
// 	),
//	'default'=>''
//) );

$woocommerce->createOption( array(
	'name'    => 'Show Wishlist in products list',
	'id'      => 'woo_set_show_wishlist',
	'type'    => 'checkbox',
	'default' => false,
) );
$woocommerce->createOption( array(
	'name'    => 'Show QuickView in products list',
	'id'      => 'woo_set_show_qv',
	'type'    => 'checkbox',
	'default' => false,
) );
$woocommerce->createOption( array(
	'name'    => 'Show Compare in products list',
	'id'      => 'woo_set_show_compare',
	'type'    => 'checkbox',
	'default' => false,
) );