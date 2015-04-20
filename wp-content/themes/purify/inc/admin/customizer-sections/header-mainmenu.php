<?php

// main menu

$header->addSubSection( array(
    'name'     =>  __('Main Menu','thim'),
    'id'       => 'display_main_menu',
    'position' => 15,
) );


$header->createOption( array( "name"    => __("Background color","thim"),
    "desc"    => "Pick a background color for main menu",
    "id"      => "bg_main_menu_color",
    "default" => "#fff",
    "type"    => "color-opacity"
) );

//$header->createOption( array( "name"    => __("Background Opacity","thim"),
//							  "desc"    => "Value in [0,1]",
//							  "id"      => "bg_main_menu_opacity",
//							  "default" => "0.3",
//							  "type"    => "text"
//) );

$header->createOption( array( "name"    => __("Text color","thim"),
    "desc"    => __("Pick a text color for main menu","thim"),
    "id"      => "main_menu_text_color",
    "default" => "#0e2a36",
    "type"    => "color-opacity"
) );
$header->createOption( array( "name"    => __("Text Hover color","thim"),
    "desc"    => __("Pick a text hover color for main menu","thim"),
    "id"      => "main_menu_text_hover_color",
    "default" => "#01b888",
    "type"    => "color-opacity"
) );

//$header->createOption( array( "name"    => __("Background Sub menu","thim"),
//							  "desc"    => __("Pick a background color for sub menu","agap"),
//							  "id"      => "bg_sub_menu",
//							  "default" => "#0e2a36",
//							  "type"    => "color-opacity"
//) );

//$header->createOption( array( "name"    => __("Opacity Hover","thim"),
//							  "desc"    => "Value in [0,1]",
//							  "id"      => "opacity_parent_menu",
//							  "default" => "0.3",
//							  "type"    => "text"
//) );

$header->createOption( array( "name"    => __("Font Size","thim"),
    "desc"    => "Default is 13",
    "id"      => "font_size_main_menu",
    "default" => "13px",
    "type"    => "select",
    "options" => $font_sizes
) );

$header->createOption( array( "name"    => __("Font Weight","thim"),
    "desc"    => "Default bold",
    "id"      => "font_weight_main_menu",
    "default" => "400",
    "type"    => "select",
    "options" => array( 'bold' => 'Bold', 'normal' => 'Normal', '100' => '100', '200' => '200', '300' => '300', '400' => '400', '500' => '500', '600' => '600', '700' => '700', '800' => '800', '900' => '900' ),
) );
