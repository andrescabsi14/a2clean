<?php

class Thim_Our_Team_Widget extends Thim_Widget {
    function __construct() {

        parent::__construct(
            'our-team',
            __( 'Thim: Our Team', 'thim' ),
            array(
                'description' => __( '', 'thim' ),
                'help'        => ''
            ),
            array(),
            array(
                'number'        => array(
                    'type'    => 'number',
                    'label'   => __( 'Number Posts', 'thim' ),
                    'default' => '5'
                ),
                'column'        => array(
                    "type"    => "select",
                    "label"   => __( "Column", "thim" ),
                    "options" => array(
                        "2" => __( "2", "thim" ),
                        "3" => __( "3", "thim" ),
                        "4" => __( "4", "thim" )
                    ),
                ),
//				'css_animation' => array(
//					"type"    => "select",
//					"label"   => __( "CSS Animation", "thim" ),
//					"options" => array(
//						""              => __( "No", "thim" ),
//						"top-to-bottom" => __( "Top to bottom", "thim" ),
//						"bottom-to-top" => __( "Bottom to top", "thim" ),
//						"left-to-right" => __( "Left to right", "thim" ),
//						"right-to-left" => __( "Right to left", "thim" ),
//						"appear"        => __( "Appear from center", "thim" )
//					),
//				),

            ),
            TP_THEME_DIR . 'inc/widgets/our-team/'
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
//
//function thim_our_team_register_widget() {
//    register_widget( 'Our_Team_Widget' );
//}
//
//add_action( 'widgets_init', 'thim_our_team_register_widget' );
