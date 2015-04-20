<?php

class Thim_Cleaning_Services_Widget extends Thim_Widget {

	function __construct() {
		$link_images = get_template_directory_uri() . '/inc/widgets/cleaning-services/images/';
		parent::__construct(
			'cleaning-services',
			__( 'Thim: Cleaning Services', 'thim' ),
			array(
				'description' => __( 'Add Cleaning Services', 'thim' ),
				'help'        => ''
			),
			array(),
			array(
				'tab'    => array(
					'type'      => 'repeater',
					'label'     => __( 'Add Tab Title', 'thim' ),
					'item_name' => __( 'Add tab', 'thim' ),
					'fields'    => array(
						'title'       => array(
							"type"    => "text",
							"label"   => __( "Tab Title", "thim" ),
							"default" => "Tab Title",
						),
						'item-tab'    => array(
							'type'      => 'repeater',
							'label'     => __( 'Add Item', 'thim' ),
							'item_name' => __( 'Add item', 'thim' ),
							'fields'    => array(
								'content_tab' => array(
									'type'   => 'section',
									'label'  => __( 'Content Tab', 'thim' ),
									'hide'   => true,
									'fields' => array(
										'image'       => array(
											'type'        => 'media',
											'label'       => __( 'Image', 'thim' ),
											'description' => __( 'Select image from media library.', 'thim' )
										),
										'title'       => array(
											"type"    => "text",
											"label"   => __( "Title item", "thim" ),
											"default" => "Title item",
										),

										'title_color' => array(
											"type"  => "color",
											"label" => __( "Title color content", "thim" ),
										),
										'link_item'   => array(
											"type"  => "text",
											"label" => __( "Link item", "thim" ),
										),
										'content'     => array(
											"type"  => "textarea",
											"label" => __( "Content", "thim" ),
										),
										'bg_content'  => array(
											"type"  => "color",
											"label" => __( "Background content", "thim" ),
										),
										'text_color'  => array(
											"type"  => "color",
											"label" => __( "Text color content", "thim" ),
										),
									),
								),
							),
						),

						'text_button' => array(
							"type"  => "text",
							"label" => __( "Text button", "thim" ),
						),
						'link_tab'    => array(
							"type"  => "text",
							"label" => __( "Link button", "thim" ),
						),
					),
				),
				'tab_color' => array(
					"type"  => "color",
					"label" => __( "Tab Title color", "thim" ),
				),
				'column' => array(
					"type"    => "select",
					"label"   => __( "Column item", "thim" ),
					"options" => array(
						"2" => __( "2", "thim" ),
						"3" => __( "3", "thim" ),
						"4" => __( "4", "thim" ),

					),
				),
				'layout' => array(
					"type"    => "radioimage",
					"label"   => __( "Layout", "thim" ),
					"default" => "default",
					"options" => array(
						"default"   => $link_images . 'cleaning_services_default.jpg',
						"layout-01" => $link_images . 'cleaning_services_1.jpg',
						"layout-02" => $link_images . 'cleaning_services_2.jpg',
					),
				),
			),
			TP_THEME_DIR . 'inc/widgets/cleaning-services/'
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

