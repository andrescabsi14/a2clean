<?php

class Thim_Counters_Box_Widget extends Thim_Widget {

	function __construct() {

		parent::__construct(
			'counters-box',
			__( 'Thim: Counters Box', 'thim' ),
			array(
				'description' => __( 'Counters Box', 'thim' ),
				'help'        => ''
			),
			array(),
			array(
				'counters_label' => array(
					"type"  => "text",
					"label" => __( "Counters label", "thim" ),
				),
				'label_group'        => array(
					'type'   => 'section',
					'label'  => __( 'Label Options', 'thim' ),
					'hide'   => true,
					'fields' => array(
						'label_color'    => array(
							"type"  => "color",
							"label" => __( "Counters label Color", "thim" ),
						),
						'label_font_size'   => array(
							"type"        => "number",
							"label"       => __( "Counters Label Font Size", "thim" ),
							"suffix"      => "px",
							"default"     => "14",
							"description" => __( "custom font size", "thim" ),
							"class"       => "color-mini"
						),
						'label_font_weight' => array(
							"type"        => "select",
							"label"       => __( "Counters Label Font Weight", "thim" ),
							"class"       => "color-mini",
							"options"     => array(
								"" => __( "Normal", "thim" ),
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
					)
				),
				'counters_value' => array(
					"type"    => "number",
					"label"   => __( "Counters Value", "thim" ),
					"default" => "20",
				),
				'counters_value_group'        => array(
					'type'   => 'section',
					'label'  => __( 'Counters Value Options', 'thim' ),
					'hide'   => true,
					'fields' => array(
						'counters_value_color'  => array(
							"type"  => "color",
							"label" => __( "Counters Value Color", "thim" ),
						),
						'counters_value_font_size'   => array(
							"type"        => "number",
							"label"       => __( "Counters Value Font Size", "thim" ),
							"suffix"      => "px",
							"default"     => "50",
							"description" => __( "custom font size", "thim" ),
							"class"       => "color-mini"
						),
						'counters_value_font_weight' => array(
							"type"        => "select",
							"label"       => __( "Counters Value Font Weight", "thim" ),
							"class"       => "color-mini",
							"options"     => array(
								"" => __( "Normal", "thim" ),
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
					)
				),
				'icon'           => array(
					"type"  => "icon-7-stroke",
					"label" => __( "Icon", "thim" ),
				),
				'icon_group'        => array(
					'type'   => 'section',
					'label'  => __( 'Icon Options', 'thim' ),
					'hide'   => true,
					'fields' => array(
						'icon_color'  => array(
							"type"  => "color",
							"label" => __( "Icon Color", "thim" ),
						),
						'icon_font_size'   => array(
							"type"        => "number",
							"label"       => __( "Icon Font Size", "thim" ),
							"suffix"      => "px",
							"default"     => "50",
							"description" => __( "custom font size", "thim" ),
							"class"       => "color-mini"
						),
						'icon_background_color'  => array(
							"type"  => "color",
							"label" => __( "Icon Background Color", "thim" ),
						),
					)
				),
				'css_animation'  => array(
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
				)
			),
			TP_THEME_DIR . 'inc/widgets/counters-box/'
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

	function enqueue_frontend_scripts() {
		wp_enqueue_script( 'thim-waypoints', TP_THEME_URI . 'js/waypoints.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'thim-counters-box', TP_THEME_URI . 'inc/widgets/counters-box/js/counters-box.js', array( 'jquery' ), '', true );
	}
}

