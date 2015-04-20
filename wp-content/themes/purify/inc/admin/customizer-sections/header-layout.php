<?php

$header->addSubSection( array(
    'name'     => __( 'Header Layout', 'thim' ),
    'id'       => 'display_header_layout',
    'position' => 10,
) );

$header->createOption( array(
    'name'    => __( 'Select a Layout', 'thim' ),
    'id'      => 'header_style',
    'type'    => 'radio-image',
    'options' => array(
        "header_v1" => get_template_directory_uri( 'template_directory' ) . "/images/patterns/header-layout1.jpg",
        "header_v2" => get_template_directory_uri( 'template_directory' ) . "/images/patterns/header-layout2.jpg",
//        "header_v3" => get_template_directory_uri( 'template_directory' ) . "/images/patterns/header3.jpg",
        // "header_v4" => get_template_directory_uri( 'template_directory' ) . "/images/patterns/header1.jpg",
        // "header_v5" => get_template_directory_uri( 'template_directory' ) . "/images/patterns/header2.jpg",
        // "header_v6" => get_template_directory_uri( 'template_directory' ) . "/images/patterns/header3.jpg",
        // "header_v7" => get_template_directory_uri( 'template_directory' ) . "/images/patterns/header1.jpg",
        // "header_v8" => get_template_directory_uri( 'template_directory' ) . "/images/patterns/header2.jpg",
        // "header_v9" => get_template_directory_uri( 'template_directory' ) . "/images/patterns/header3.jpg",
    ),
    'default' => 'header_v2',
) );

$header->createOption( array(
    'name'    => __( 'Header Width', 'thim' ),
    'id'      => 'header_layout',
    'type'    => 'select',
    'options' => array(
        'boxed' => __( 'Boxed', 'thim' ),
        'wide'  => __( 'Wide', 'thim' ),
    ),
    'default' => 'wide',
) );

$header->createOption( array(
    'name'    => __( 'Header Position', 'thim' ),
    'id'      => 'header_position',
    'type'    => 'select',
    'options' => array(
        ''                    => __( 'Default', 'thim' ),
        'header_overlay'      => __( 'Overlay', 'thim' ),
        'header_after_slider' => __( 'After Slider', 'thim' ),
    ),
    'default' => '',
) );

$header->createOption( array(
    'name'    => __( 'Header Transparent on home page', 'thim' ),
    'id'      => 'show_header_transparent',
    'type'    => 'checkbox',
    "desc"    => "enbale/disable",
    'default' => false,
) );
$header->createOption( array(
    'name'    => __( 'Header show border bottom', 'thim' ),
    'id'      => 'show_border_bottom_header',
    'type'    => 'checkbox',
    "desc"    => "enbale/disable",
    'default' => false,
) );
//$header->createOption( array( 'name'    => 'Menu item hover and active',
//    'id'      => 'menu_active',
//    'default' => '#fff',
//    'type'    => 'select',
//    'options' => array(
//        ''              => __( 'Default', 'thim' ),
//        'border_bottom' => __( 'Border Bottom', 'thim' ),
//    ),
//) );

$header->createOption( array( 'name'    => 'Header Background color',
    'desc'    => 'Pick a background color for header',
    'id'      => 'bg_header_color',
    'default' => '#fff',
    'type'    => 'color-opacity'
) );

$header->createOption( array( 'name'    => 'Header Border color',
    'desc'    => 'Pick a border color for header',
    'id'      => 'header_border_color',
    'default' => '#eee',
    'type'    => 'color-opacity'
) );

$header->createOption( array( 'name'    => 'Header Text color',
    'desc'    => 'Pick a text color for header',
    'id'      => 'header_text_color',
    'default' => '#999',
    'type'    => 'color-opacity'
) );
$header->createOption( array( 'name'    => 'Color Border Bottom Header',
    'id'      => 'bg_border_header_color',
    'default' => '',
    'type'    => 'color-opacity'
) );
//$header->createOption( array(
//	'name' => __( 'Margin Top', 'thim' ),
//	'id'   => 'margin_header_top',
//	'type' => 'number',
//	'max'  => '100'
//) );
