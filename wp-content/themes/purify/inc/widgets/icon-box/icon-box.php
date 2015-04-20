<?php

class Thim_Icon_Box_Widget extends Thim_Widget {
	function __construct() {
		$link_images = get_template_directory_uri() . '/inc/widgets/icon-box/images/';
		parent::__construct(
			'icon-box',
			__( 'Thim: Icon Box', 'thim' ),
			array(
				'description' => __( 'Add icon box', 'thim' ),
				'help'        => ''
			),
			array(),
			array(

				'title_group'        => array(
					'type'   => 'section',
					'label'  => __( 'Title Options', 'thim' ),
					'hide'   => true,
					'fields' => array(
						'title'          => array(
							'type'        => 'text',
							'label'       => __( 'Title', 'thim' ),
							"default"     => "This is an icon box.",
							"description" => __( "Provide the title for this icon box.", "thim" ),
						),

						'color_title'    => array(
							'type'  => 'color',
							'label' => __( 'Color Title', 'thim' ),
						),

						'size'           => array(
							"type"        => "select",
							"label"       => __( "Size Heading", "thim" ),
							"options"     => array(
								"h3" => __( "h3", "thim" ),
								"h2" => __( "h2", "thim" ),
								"h4" => __( "h4", "thim" ),
								"h5" => __( "h5", "thim" ),
								"h6" => __( "h6", "thim" )
							),
							"description" => __( "Select size heading.", "thim" )
						),

						'font_heading'   => array(
							"type"        => "select",
							"label"       => __( "Font Heading", "thim" ),
							"options"     => array(
								"default" => __( "Default", "thim" ),
								"custom"  => __( "Custom", "thim" )
							),
							"description" => __( "Select Font heading.", "thim" )
						),

						'custom_heading' => array(
							'type'   => 'section',
							'label'  => __( 'Custom Heading Option', 'thim' ),
							'hide'   => true,
							'fields' => array(
								'custom_font_size'   => array(
									"type"        => "number",
									"label"       => __( "Font Size", "thim" ),
									"suffix"      => "px",
									"default"     => "14",
									"description" => __( "custom font size", "thim" ),
									"class"       => "color-mini"
								),

								'custom_font_weight' => array(
									"type"        => "select",
									"label"       => __( "Custom Font Weight", "thim" ),
									"class"       => "color-mini",
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
								'custom_mg_bt'       => array(
									"type"   => "number",
									"class"  => "color-mini",
									"label"  => __( "Margin Bottom Value", "aloxo" ),
									"value"  => 0,
									"suffix" => "px",
								),
							)
						),


//						'heading_style'  => array(
//							"type"    => "radioimage",
//							"class"   => "style_header_select",
//							"label"   => __( "Heading Style:", "thim" ),
//							"options" => array(
//								"heading_style1" => $link_images . 'heading-style1.jpg',
//								"heading_style2" => $link_images . 'heading-style2.jpg',
//								"heading_style3" => $link_images . 'heading-style3.jpg',
//								"heading_style4" => $link_images . 'heading-style4.jpg',
//							),
//							"default" => "heading_style1",
//						),
					),
				),
				'desc_group'         => array(
					'type'   => 'section',
					'label'  => __( 'Description', 'thim' ),
					'hide'   => true,
					'fields' => array(
						'content' => array(
							"type"        => "textarea",
							"label"       => __( "Add description", "thim" ),
							"default"     => "Write a short description, that will describe the title or something informational and useful.",
							"description" => __( "Provide the description for this icon box.", "thim" ),
							'allow_html_formatting'=>true
						),
						'custom_font_size_des'   => array(
							"type"        => "number",
							"label"       => __( "Custom Font Size", "thim" ),
							"suffix"      => "px",
							"default"     => "",
							"description" => __( "custom font size", "thim" ),
							"class"  => "color-mini",
 						),
						'custom_font_weight' => array(
							"type"        => "select",
							"label"       => __( "Custom Font Weight", "thim" ),
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
						'color_description'     => array(
							"type"  => "color",
							"label" => __( "Color Description", "thim" ),
							"class"  => "color-mini",
						),
						'show_line_bottom'=> array(
							"type"  => "checkbox",
							"label" => __( "Show Line Bottom", "thim" ),
							"class"       => "clear",
						),
					),
				),
//				'border_group'        => array(
//					'type'   => 'section',
//					'label'  => __( 'Border Bottom Options', 'thim' ),
//					'hide'   => true,
//					'fields' => array(
//						// Customize Icon Color
//						'show_border'   => array(
//							"type"        => "select",
//							"label"       => __( "Border Bottom", "thim" ),
//							"options"     => array(
//								"hide"  => __( "Hide", "thim" ),
//								"show" => __( "Show", "thim" )
//							),
//							"description" => __( "Show border bottom.", "thim" )
//						),
//						'border_bottom_color'       => array(
//							"type"        => "color",
//							"label"       => __( "Border Color:", "thim" ),
//							"description" => __( "Select the color for border.", "thim" ),
//							"class"       => "color-mini",
//						),
//					)
//				),
				'read_more_group'    => array(
					'type'   => 'section',
					'label'  => __( 'Link Icon Box', 'thim' ),
					'hide'   => true,
					'fields' => array(
						// Add link to existing content or to another resource
						'link'                   => array(
							"type"        => "text",
							"label"       => __( "Add Link", "thim" ),
							"description" => __( "Provide the link that will be applied to this icon box.", "thim" )
						),

						// Select link option - to box or with read more text
						'read_more'              => array(
							"type"        => "select",
							"label"       => __( "Apply link to:", "thim" ),
							"options"     => array(
								""      => "Complete Box",
								"title" => "Box Title",
								"more"  => "Display Read More"
							),
							"description" => __( "Select whether to use color for icon or not.", "thim" )
						),
						// Link to traditional read more
						'button_read_more_group' => array(
							'type'   => 'section',
							'label'  => __( 'Option Button Read More', 'thim' ),
							'hide'   => true,
							'fields' => array(
								'read_text'               => array(
									"type"        => "text",
									"label"       => __( "Read More Text", "thim" ),
									"default"     => "Read More",
									"description" => __( "Customize the read more text.", "thim" ),
								),
								'border_read_more_text'   => array(
									"type"        => "color",
									"label"       => __( "Border Color Read More Text:", "thim" ),
									"description" => __( "Select whether to use border color for Read More Text or none.", "thim" ),
									"class"       => "color-mini",
								),
								'bg_read_more_text'       => array(
									"type"        => "color",
									"class"       => "mini",
									"label"       => __( "Background Color Read More Text:", "thim" ),
									"description" => __( "Select whether to use background color for Read More Text or default.", "thim" ),
									"class"       => "color-mini",
								),
								'bg_read_more_text_hover' => array(
									"type"        => "color",
									"label"       => __( "Background Hover Color Read More Text:", "thim" ),
									"description" => __( "Select whether to use background color when hover Read More Text or default.", "thim" ),
									"class"       => "color-mini",
								),
								'read_more_text_color'    => array(
									"type"        => "color",
									"class"       => "",
									"label"       => __( "Text Color Read More Text:", "thim" ),
									"default"     => "#fff",
									"description" => __( "Select whether to use text color for Read More Text or default.", "thim" ),
									"class"       => "color-mini",
								),
							)
						),
					),
				),

				// Play with icon selector
				'icon_type'          => array(
					"type"    => "radio",
					"class"   => "",
					"label"   => __( "Icon to display:", "thim" ),
					"default" => "font-awesome",
					"options" => array(
						"font-awesome" => "Font Awesome Icon",
                                                "font-7-stroke"       => "Font 7 stroke Icon",
						"custom"       => "Custom Image Icon",
					),
				),
                            
                                'font_7_stroke_group' => array(
					'type'   => 'section',
					'label'  => __( 'Font 7 Stroke Icon', 'thim' ),
					'hide'   => true,
					'fields' => array(
						'icon'      => array(
							"type"        => "icon-7-stroke",
							"class"       => "",
							"label"       => __( "Select Icon:", "thim" ),
							"description" => __( "Select the icon from the list.", "thim" ),
							"class_name"  => 'font-7-stroke',
						),
						// Resize the icon
						'icon_size' => array(
							"type"        => "number",
							"class"       => "",
							"label"       => __( "Icon Font Size ", "thim" ),
							"suffix"      => "px",
							"default"     => "14",
							"description" => __( "Select the icon font size.", "thim" ),
							"class_name"  => 'font-7-stroke'
						),
					),
				),

				'font_awesome_group' => array(
					'type'   => 'section',
					'label'  => __( 'Font Awesome Icon', 'thim' ),
					'hide'   => true,
					'fields' => array(
						'icon'      => array(
							"type"        => "icon",
							"class"       => "",
							"label"       => __( "Select Icon:", "thim" ),
							"description" => __( "Select the icon from the list.", "thim" ),
							"class_name"  => 'font-awesome',
						),
						// Resize the icon
						'icon_size' => array(
							"type"        => "number",
							"class"       => "",
							"label"       => __( "Icon Font Size ", "thim" ),
							"suffix"      => "px",
							"default"     => "14",
							"description" => __( "Select the icon font size.", "thim" ),
							"class_name"  => 'font-awesome'
						),
					),
				),

				'font_image_group'   => array(
					'type'   => 'section',
					'label'  => __( 'Custom Image Icon', 'thim' ),
					'hide'   => true,
					'fields' => array(
						// Play with icon selector
						'icon_img'      => array(
							"type"        => "media",
							"label"       => __( "Upload Image Icon:", "thim" ),
							"description" => __( "Upload the custom image icon.", "thim" ),
							"class_name"  => 'custom',
						),

						'width_images'  => array(
							"type"        => "number",
							"class"       => "",
							"label"       => __( "Width Images", "thim" ),
							"suffix"      => "px",
							"default"     => "30",
							"description" => __( "Select width images. Leave empty for using original size", "thim" ),
							"class_name"  => 'custom',
						),
						'height_images' => array(
							"type"        => "number",
							"class"       => "",
							"default"     => "30",
							"label"       => __( "Height Images", "thim" ),
							"suffix"      => "px",
							"description" => __( "Select Height Images. Leave empty for using original size", "thim" ),
							"class_name"  => 'custom',
						),
					),
				),
				// // Resize the icon
				'width_icon_box'     => array(
					"type"    => "number",
					"class"   => "",
					"default" => "100",
					"label"   => __( "Width Box Icon", "thim" ),
					"suffix"  => "px",
				),
				'color_group'        => array(
					'type'   => 'section',
					'label'  => __( 'Color Options', 'thim' ),
					'hide'   => true,
					'fields' => array(
						// Customize Icon Color
						'icon_color'              => array(
							"type"        => "color",
							"class"       => "color-mini",
							"label"       => __( "Select Icon Color:", "thim" ),
							"description" => __( "Select the icon color.", "thim" ),
						),
						'icon_border_color'       => array(
							"type"        => "color",
							"label"       => __( "Icon Border Color:", "thim" ),
							"description" => __( "Select the color for icon border.", "thim" ),
							"class"       => "color-mini",
						),
						// Give some background to icon
						'icon_bg_color'           => array(
							"type"        => "color",
							"label"       => __( "Icon Background Color:", "thim" ),
							"description" => __( "Select the color for icon background.", "thim" ),
							"class"       => "color-mini",
						),

						'icon_hover_color'        => array(
							"type"        => "color",
							"label"       => __( "Hover Icon Color:", "thim" ),
							"description" => __( "Select the color hover for icon.", "thim" ),
							"class"       => "color-mini",
						),
						'icon_border_color_hover' => array(
							"type"        => "color",
							"label"       => __( "Hover Icon Border Color:", "thim" ),
							"description" => __( "Select the color hover for icon border.", "thim" ),
							"class"       => "color-mini",
						),
						// Give some background to icon
						'icon_bg_color_hover'     => array(
							"type"        => "color",
							"label"       => __( "Hover Icon Background Color:", "thim" ),
							"description" => __( "Select the color hover for icon background .", "thim" ),
							"class"       => "color-mini",
						),
						'bg_shortcode'            => array(
							"type"        => "color",
							"label"       => __( "Background Widget", "thim" ),
							"description" => __( "Select the color for widget background.", "thim" ),
							"class"       => "color-mini",
						),
					)
				),



				'layout_group'       => array(
					'type'   => 'section',
					'label'  => __( 'Layout Options', 'thim' ),
					'hide'   => true,
					'fields' => array(
						'icon_style'     => array(
							"type"    => "radioimage",
							"label"   => __( "Layout", "thim" ),
							"default" => "layout-01",
							"options" => array(
								"layout-01" => $link_images . 'layout-01.jpg',
								"layout-02" => $link_images . 'layout-02.jpg',
//								"layout-03" => $link_images . 'layout-03.jpg',
//								"layout-04" => $link_images . 'layout-04.jpg',
							)
						),

						'box_icon_style' => array(
							"type"    => "select",
							"class"   => "",
							"label"   => __( "Icon Shape", "thim" ),
							"options" => array(
								""       => __( "None", "thim" ),
								"circle" => __( "Circle", "thim" ),
								//"parallelogram" => __( "Parallelogram", "thim" ),
							),
							"std"     => "circle",
						),
						'pos'            => array(
							"type"        => "select",
							"class"       => "",
							"label"       => __( "Box Style:", "thim" ),
							"default"     => "top",
							"options"     => array(
								"left"  => "Icon at Left",
								"right" => "Icon at Right",
								"top"   => "Icon at Top"
							),
							"description" => __( "Select icon position. Icon box style will be changed according to the icon position.", "thim" ),
						),

						'text_align_sc'  => array(
							"type"    => "select",
							"class"   => "",
							"label"   => __( "Text Align Shortcode:", "thim" ),
							"options" => array(
								"text-left"   => "Text Left",
								"text-right"  => "Text Right",
								"text-center" => "Text Center"
							)
						),

//						'icon_effect'    => array(
//							"type"    => "select",
//							"class"   => "",
//							"label"   => __( "Icon Hover Effects", "thim" ),
//							"options" => array(
//								""                => __( "None", "thim" ),
//								"bounceIn"        => __( "BounceIn", "thim" ),
//								"outline-outward" => __( "Outline Outward", "thim" )
//							),
//						),
					),
				),

				'css_animation'      => array(
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
			TP_THEME_DIR . 'inc/widgets/icon-box/'
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
		wp_enqueue_script( 'admin-icon-box', TP_THEME_URI . 'inc/widgets/icon-box/js/icon-box-admin.js', array( 'jquery' ), '', true );
	}

	function enqueue_frontend_scripts() {
		wp_enqueue_script( 'icon-box', TP_THEME_URI . 'inc/widgets/icon-box/js/icon-box.js', array( 'jquery' ), '', true );
	}
}

//function thim_icon_box_register_widget(){
//	register_widget('Icon_Box_Widget');
//}
//add_action('widgets_init', 'thim_icon_box_register_widget');