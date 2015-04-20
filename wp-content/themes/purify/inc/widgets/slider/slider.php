<?php

class Thim_Slider_Widget extends Thim_Widget {
	function __construct() {
		parent::__construct(
			'slider',
			__( 'Thim: Slider', 'thim' ),
			array(
				'description' => __( 'Thim Slider', 'thim' ),
				'help'        => ''
			),
			array(),
			array(
				'thim_slider_frames'  => array(
					'type'      => 'repeater',
					'label'     => __( 'Slider Frames', 'thim' ),
					'item_name' => __( 'Frame', 'thim' ),
					'fields'    => array(
						'thim_slider_background_image'      => array(
							'type'    => 'media',
							'library' => 'image',
							'label'   => __( 'Background Image', 'thim' ),
						),
						'thim_slider_background_image_type' => array(
							'type'    => 'select',
							'default' => 'cover',
							'label'   => __( 'Background Image Type', 'thim' ),
							'options' => array(
								'cover' => __( 'Cover', 'thim' ),
								'tile'  => __( 'Tile', 'thim' ),
							),
						),
						'content'                           => array(
							'type'   => 'section',
							'label'  => 'Content Slider',
							'hide'   => true,
							'fields' => array(
								'thim_slider_title'       => array(
									'type'  => 'text',
									'label' => __( 'Heading Slider', 'thim' ),
									'allow_html_formatting'=>true
								),
								'size'                    => array(
									'type'  => 'text',
									"label" => __( "Custom Font Size Title", "thim" ),
									'desc'  => 'input custom font size: ex: 30'
								),
								'thim_color_title'        => array(
									'type'  => 'color',
									'label' => __( 'Heading Color Title', 'thim' )
								),
								'thim_slider_description' => array(
									'type'  => 'textarea',
									'label' => __( 'Description', 'thim' ),
									'allow_html_formatting'=>true
								),
								'thim_color_des'          => array(
									'type'  => 'color',
									'label' => __( 'Description Color', 'thim' )
								),
								'button_text'             => array(
									'type'  => 'text',
									"label" => __( "Button Text", "thim" )
								),
								'button_link'             => array(
									'type'  => 'text',
									"label" => __( "Link Button", "thim" )
								),
								'thim_slider_align'       => array(
									"type"    => "select",
									"label"   => __( "Content Align:", "thim" ),
									"options" => array(
										"left"   => __( "Content at Left", "thim" ),
										"right"  => __( "Content at Right", "thim" ),
										"center" => __( "Content at Center", "thim" )
									),
								),
//								'margin-top'       => array(
//									'type'  => 'text',
//									'label' => __( 'Margin Top', 'thim' ),
//									'desc'=>'Margin top for Content Slider'
//								),
								'extra_class'             => array(
									'type'  => 'text',
									'label' => __( 'Extra Class', 'thim' ),
									'desc'  => 'Extra Class for Content Slider'
								),
							),
						),
					),
				),

				'thim_slider_speed'   => array(
					'type'        => 'number',
					'label'       => __( 'Animation Speed', 'thim' ),
					'description' => __( 'Animation speed in milliseconds.', 'thim' ),
					'default'     => 800,
				),

				'thim_slider_timeout' => array(
					'type'        => 'number',
					'label'       => __( 'Timeout', 'thim' ),
					'description' => __( 'How long each slide is displayed for in milliseconds.', 'thim' ),
					'default'     => 8000,
				),

				'thim_slider_pagination' => array(
					'type'        => 'select',
					"label"       => __( "Select to show Pagination :", "thim" ),
					"options"     => array(
						"show" => __( "Show", "thim" ),
						"hide" => __( "Hide", "thim" ),
					),
					'default'	=> 'show'
				),

				'thim_slider_controls' => array(
					'type'        => 'select',
					"label"       => __( "Select to show Controls:", "thim" ),
					"options"     => array(
						"show" => __( "Show", "thim" ),
						"hide" => __( "Hide", "thim" ),
					),
					'default'	=> 'show'
				),

			),
			TP_THEME_DIR . 'inc/widgets/slider/'
		);
	}

	function get_template_name( $instance ) {
		return 'base';
	}

	function get_style_name( $instance ) {
		return false;
	}

	/**
	 * Enqueue the slider scripts
	 */
	function enqueue_frontend_scripts() {
		wp_enqueue_script( 'thim-jquery-cycle', TP_THEME_URI . 'inc/widgets/slider/js/jquery.cycle.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'thim-cycle.swipe', TP_THEME_URI . 'inc/widgets/slider/js/jquery.cycle.swipe.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'thim-slider', TP_THEME_URI . 'inc/widgets/slider/js/slider.js', array( 'jquery' ), '', true );
	}
}