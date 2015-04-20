<?php
$footer->addSubSection( array(
	'name'     => __( 'Copyright Options', 'thim' ),
	'id'       => 'display_copyright',
	'position' => 11,
) );

$footer->createOption( array(
	'name' => __( 'Back To Top', 'thim' ),
	'id'   => 'show_to_top',
	'type' => 'checkbox',
	'des'  => 'show or hide back to top',
) );


$footer->createOption( array(
	'name'        => __( 'Background Copyright Color', 'thim' ),
	'id'          => 'copyright_bg_color',
	'type'        => 'color-opacity',
	'default'     => '#fff',
	'livepreview' => '$("#powered").css("background-color", value);'
) );

$footer->createOption( array(
	'name'        => __( 'Text Color', 'thim' ),
	'id'          => 'copyright_text_color',
	'type'        => 'color-opacity',
	'default'     => '#111',
	'livepreview' => '$("#powered").css("color", value);'
) );
$copy_right = 'http://www.thimpress.com';
$footer->createOption( array(
	'name'        => __( 'Copyright Text', 'thim' ),
	'id'          => 'copyright_text',
	'type'        => 'textarea',
	'default'     => 'Powered By <a href="' . $copy_right . '">ThimPress</a><| Putify &copy; 2015',
	'livepreview' => '$("#powered").html(function(){return "<p>"+ value + "</p>";})'
) );
