<?php
/**
 * Created by PhpStorm.
 * User: Phan Long
 * Date: 3/19/2015
 * Time: 2:44 PM
 */
class Thim_Recent_Comments_New_Widget extends Thim_Widget {

	function __construct() {

		parent::__construct(
			'recent-comments-new',
			__( 'Thim: Recent Comment', 'thim' ),
			array(
				'description' => __( 'Your site most recent comments. ', 'thim' ),
				'help'        => ''
			),
			array(),

			array(
				'title'          => array(
					'type'  => 'text',
					'label' => __( 'Title', 'thim' )
				),
				'number-comments'         => array(
					'type'    => 'text',
					'label'   => __( 'Nubmer comments', 'thim' ),
					'description'    => __( 'Number of comments to show.', 'thim' )
				),
				'comments-length'         => array(
					'type'    => 'text',
					'label'   => __( 'Comment Length', 'thim' ),
					'description'    => __( 'Length Display comments.', 'thim' )
				),
			),
			TP_THEME_DIR . 'inc/widgets/recent-comments-new/'
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