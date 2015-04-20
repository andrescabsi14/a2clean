<?php
/*
 * Post and Page Display Settings
 */
$display->addSubSection( array(
	'name'     => 'Post & Page',
	'id'       => 'display_postpage',
	'position' => 3,
) );

$display->createOption( array(
	'name'    => 'Select Layout Default',
	'id'      => 'post_page_layout',
	'type'    => 'radio-image',
	'options' => array(
		'1col-fixed' => $url . 'body-full.png',
		'2c-l-fixed' => $url . 'sidebar-left.png',
		'2c-r-fixed' => $url . 'sidebar-right.png'
	),
	'default' => '2c-l-fixed',
) );

$display->createOption( array(
	'name'        => 'Heading Background',
	'id'          => 'post_page_bg_content',
	'type'        => 'color-opacity',
	'default'     => '',
	//'livepreview' => '$("body").css("background-color", value);'
) );

$display->createOption( array(
	'name'        => 'Text Color Heading',
	'id'          => 'post_page_text_color',
	'type'        => 'color-opacity',
	'default'     => '#111',
	'livepreview' => '',
) );
$display->createOption( array(
	'name'    => 'Hide Breadcrumbs?',
	'id'      => 'post_page_hide_breadcrumbs',
	'type'    => 'checkbox',
	"desc"    => "Check this box to hide/unhide Breadcrumbs",
	'default' => false,
) );
$display->createOption( array(
	'name'    => 'Height Heading',
	'id'      => 'post_page_height_heading',
	'type'    => 'number',
	"desc"    => "Use a number without 'px', default is 100. ex: 100",
	'default' => '100',
	'max'     => '300',
	'min'     => '50',
) );

$display->createOption( array(
    'name'    => 'Show category',
    'id'      => 'single_show_category',
    'type'    => 'checkbox',
    "desc"    => "show/hidden",
    'default' => false,
) );

$display->createOption( array(
    'name'    => 'Show Date',
    'id'      => 'single_show_date',
    'type'    => 'checkbox',
    "desc"    => "show/hidden",
    'default' => true,
) );

$display->createOption( array(
    'name'    => 'Show Author',
    'id'      => 'single_show_author',
    'type'    => 'checkbox',
    "desc"    => "show/hidden",
    'default' => true,
) );
$display->createOption( array(
	'name'    => 'Show Post Like',
	'id'      => 'single_show_post_like',
	'type'    => 'checkbox',
	"desc"    => "show/hidden",
	'default' => true,
) );
$display->createOption( array(
    'name'    => 'Show Comment',
    'id'      => 'single_show_comment',
    'type'    => 'checkbox',
    "desc"    => "show/hidden",
    'default' => true,
) );
