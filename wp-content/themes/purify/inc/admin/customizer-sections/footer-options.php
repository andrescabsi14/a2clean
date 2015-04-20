<?php

$footer->addSubSection( array(
	'name'     => __( 'Footer', 'thim' ),
	'id'       => 'display_footer',
	'position' => 10,
) );


//
//$footer->createOption( array(
//    'name'        => 'Logo Footer',
//    'id'          => 'footer_logo',
//    'type'        => 'upload',
//    'livepreview' => '$("#footer .logo-footer img").attr("url",value);'
//));



$footer->createOption( array(
	'name'        => 'Background Footer Color',
	'id'          => 'footer_bg_color',
	'type'        => 'color-opacity',
	'default'     => '#172B42',
	'livepreview' => '$("#footer").css("background-color", value);'
) );

$footer->createOption( array(
	'name'        => 'Text Footer Color',
	'id'          => 'footer_text_color',
	'type'        => 'color-opacity',
	'default'     => '#fff',
 ) );
//
//$footer->createOption( array(
//	'name'        => 'Background image',
//	'id'          => 'footer_bg_image',
//	'type'        => 'upload',
//) );

// $footer->createOption( array(
// 	'name'        => 'Background image',
// 	'id'          => 'footer_bg_image',
// 	'type'        => 'upload',
// ) );