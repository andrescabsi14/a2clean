<?php
 class Thim_Tab_Widget extends Thim_Widget {

	function __construct() {

		parent::__construct(
			'tab',
			__( 'Thim: Tab', 'thim' ),
			array(
				'description' => __( 'Add tab', 'thim' ),
				'help'        => ''
			),
			array(),
			array(
				'tab' => array(
					'type'      => 'repeater',
					'label'     => __( 'Tab', 'thim' ),
					'item_name' => __( 'Tab', 'thim' ),
					'fields'    => array(
						'title'   => array(
							"type"    => "text",
							"label"   => __( "Tab Title", "thim" ),
							"default" => "Tab Title",
						),
						'content' => array(
							"type"  => "editor",
							"label" => __( "Content", "thim" ),
						),
					),
				),
			),
			TP_THEME_DIR . 'inc/widgets/tab/'
		);
	}

	/**
	 * Initialize the CTA widget
	 */

	function get_template_name( $instance ) {
		return 'base';
	}

	function get_style_name( $instance ) {
		return false;
	}
}

