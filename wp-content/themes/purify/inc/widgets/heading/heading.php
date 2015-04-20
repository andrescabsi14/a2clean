<?php

class Thim_Heading_Widget extends Thim_Widget {

	function __construct() {
		//$link_images = get_template_directory_uri() . '/inc/widgets/heading/images/';
		parent::__construct(
			'heading',
			__( 'Thim: Heading', 'thim' ),
			array(
				'description' => __( 'Add heading text', 'thim' ),
				'help'        => ''
			),
			array(),
			array(
				'title'               => array(
					'type'                  => 'text',
					'label'                 => __( 'Heading Text', 'thim' ),
					'default'               => __( "Default value", "thim" ),
					'allow_html_formatting' => true
				),

				'textcolor'           => array(
					'type'    => 'color',
					'label'   => __( 'Text Heading color', 'thim' ),
					'default' => '#333',
				),

				'size'                => array(
					"type"    => "select",
					"label"   => __( "Size Heading", "thim" ),
					"options" => array(
						"h3" => __( "h3", "thim" ),
						"h2" => __( "h2", "thim" ),
						"h4" => __( "h4", "thim" ),
						"h5" => __( "h5", "thim" ),
						"h6" => __( "h6", "thim" )
					),
				),
				'font_heading'        => array(
					"type"        => "select",
					"label"       => __( "Font Heading", "thim" ),
					"default"     => "default",
					"options"     => array(
						"default" => __( "Default", "thim" ),
						"custom"  => __( "Custom", "thim" )
					),
					"description" => __( "Select Font heading.", "thim" )
				),

				'custom_font_heading' => array(
					'type'   => 'section',
					'label'  => __( 'Custom Font Heading', 'thim' ),
					'hide'   => true,
					'fields' => array(
						'custom_font_size'   => array(
							"type"        => "number",
							"label"       => __( "Font Size", "thim" ),
							"suffix"      => "px",
							"default"     => "14",
							"description" => __( "custom font size", "thim" ),
						),

						'custom_font_weight' => array(
							"type"        => "select",
							"label"       => __( "Custom Font Weight", "thim" ),
							"options"     => array(
								"normal" => __( "Normal", "thim" ),
								"bold"   => __( "Bold", "thim" ),
								"100"    => __( "100", "thim" ),
								"200"    => __( "200", "thim" ),
								"300"    => __( "300", "thim" ),
								"400"    => __( "400", "thim" ),
								"500"    => __( "500", "thim" ),
								"600"    => __( "600", "thim" ),
								"700"    => __( "700", "thim" ),
								"800"    => __( "800", "thim" ),
								"900"    => __( "900", "thim" )
							),
							"description" => __( "Select Custom Font Weight", "thim" ),
						),
						//						'custom_font_style'     => array(
//							"type"        => "select",
//							"label"       => __( "Custom Font Style", "thim" ),
//							"options"     => array(
//								"inherit" => __( "inherit", "thim" ),
//								"initial" => __( "initial", "thim" ),
//								"italic"  => __( "italic", "thim" ),
//								"normal"  => __( "normal", "thim" ),
//								"oblique" => __( "oblique", "thim" )
//							),
//							"description" => __( "Select Custom Font Style", "thim" ),
//						),
					),
				),
				'desc_group'          => array(
					'type'   => 'section',
					'label'  => __( 'Description', 'thim' ),
					'hide'   => true,
					'fields' => array(
						'des'             => array(
							'type'                  => 'textarea',
							'label'                 => __( 'Descriptions', 'thim' ),
							"description"           => __( "descriptions", "thim" ),
							'allow_html_formatting' => true
						),
						'des_color'       => array(
							'type'    => 'color',
							'label'   => __( 'Description color', 'thim' ),
							'default' => '',
						),
						'des_font_size'   => array(
							"type"        => "number",
							"label"       => __( "Font Size", "thim" ),
							"suffix"      => "px",
							"default"     => "14",
							"description" => __( "custom font size", "thim" ),
						),

						'des_font_weight' => array(
							"type"        => "select",
							"label"       => __( "Custom Font Weight", "thim" ),
							"options"     => array(
								"normal" => __( "Normal", "thim" ),
								"bold"   => __( "Bold", "thim" ),
								"100"    => __( "100", "thim" ),
								"200"    => __( "200", "thim" ),
								"300"    => __( "300", "thim" ),
								"400"    => __( "400", "thim" ),
								"500"    => __( "500", "thim" ),
								"600"    => __( "600", "thim" ),
								"700"    => __( "700", "thim" ),
								"800"    => __( "800", "thim" ),
								"900"    => __( "900", "thim" )
							),
							"description" => __( "Select Custom Font Weight", "thim" ),
						),
					),
				),
				'text_align'          => array(
					"type"    => "select",
					"label"   => __( "Widget Align:", "thim" ),
					"default" => "center",
					"options" => array(
						"left"   => __( "Left", "thim" ),
						"right"  => __( "Right", "thim" ),
						"center" => __( "Center", "thim" )
					),
				),
				'css_animation'       => array(
					"type"    => "select",
					"label"   => __( "CSS Animation", "thim" ),
					"options" => array(
						""              => __( "No", "thim" ),
						"top-to-bottom" => __( "Top to bottom", "thim" ),
						"bottom-to-top" => __( "Bottom to top", "thim" ),
						"left-to-right" => __( "Left to right", "thim" ),
						"right-to-left" => __( "Right to left", "thim" ),
						"appear"        => __( "Appear from center", "thim" )
					),
				),
			),
			TP_THEME_DIR . 'inc/widgets/heading/'
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

	function enqueue_admin_scripts() {
		wp_enqueue_script( 'heading-admin', TP_THEME_URI . 'inc/widgets/heading/js/heading-admin.js', array( 'jquery' ), '', true );
	}
}
//
//function thim_heading_register_widget() {
//	register_widget( 'Heading_Widget' );
//}
//
//add_action( 'widgets_init', 'thim_heading_register_widget' );