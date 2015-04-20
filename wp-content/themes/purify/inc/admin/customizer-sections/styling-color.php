<?php
$styling->addSubSection( array(
	'name'     => 'Background Color & Text Color',
	'id'       => 'styling_color',
	'position' => 13,
) );


$styling->createOption( array(
	'name'        => 'Body Background Color',
	'id'          => 'body_bg_color',
	'type'        => 'color-opacity',
	'default'     => '#fff',
	//'css'		  => 'body{background:value; }',
	'livepreview' => '$("body").css("background-color", value);'
) );

$styling->createOption( array(
	'name'        => 'Theme Primary Color',
	'id'          => 'body_primary_color',
	'type'        => 'color-opacity',
	'default'     => '#01b888',
	'livepreview' => '
		$(".bg-color-primary .sc-testimonials ul#testimonials li #testimonial-scrollbar a").css("background-color", value);
 	'

) );
$styling->createOption( array(
	'name'        => 'Theme Second Color',
	'id'          => 'body_second_color',
	'type'        => 'color-opacity',
	'default'     => '#f2f2f2',
 ) );
$styling->createOption( array(
	'name'        => 'Text Second Color',
	'id'          => 'text_second_color',
	'type'        => 'color-opacity',
	'default'     => '#111',
) );