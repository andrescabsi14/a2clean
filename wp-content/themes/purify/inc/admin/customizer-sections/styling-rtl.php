<?php
$styling->addSubSection( array(
	'name'     => 'RTL Support ',
	'id'       => 'styling_rtl',
	'position' => 15,
) );

$styling->createOption( array(
	'name'    => 'RTL Support',
	'id'      => 'rtl_support',
	'type'    => 'checkbox',
	"desc"    => "Enable/Disable",
	'default' => false,
) );
