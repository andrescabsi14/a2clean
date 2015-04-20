<?php

/**
 * Widget testimonials
 * user: longpq
 */

class Thim_Testimonials_Widget extends Thim_Widget {

	function __construct() {
		$link_img = TP_THEME_URI . 'images/admin/widgets/testimonials/';
		parent::__construct(
			'testimonials',
			__('Thim: Testimonials', 'thim'),
			array(
				'description' => __('Show testimonials', 'thim'),
				'help' => ''
			),
			array(),

			// options
			array(
			 // text align
				't_text_align' => array(
					'type'		=> 'select',
					'label'		=> __('Text align', 'thim'),
					'options'	=> array(
						'left'	=> __('Text at left', 'thim'),
						'center'=> __('Text at center', 'thim'),
					),
					'default' => __('left', 'thim'),
				),

			// avatar
				't_avatar' => array(
					'type'		=> 'select',
					'label'		=> __('Avatar', 'thim'),
					'options'	=> array(
						'av_top'	=> __('Avatar at top', 'thim'),
						'av_left'	=> __('Avatar at left', 'thim'),
					),
					'default' => __('av_left', 'thim'),
				),
	

			 // number posts view
				't_num_posts' => array(
					'type'		=> 'number',
					'label'		=> __('Number posts view', 'thim'),
					'integer'	=> true,
					'min'		=> 1,
					'default'	=> 3,
				),

			// order by
				't_order_by' => array(
					'type'		=> 'select',
					'label'		=> __('Order by', 'thim'),
					'options'	=> array(
						'rand'		=> __('random', 'thim'),
						'comment'	=> __('comment', 'thim'),
						'date'		=> __('date', 'thim'),
						'title'		=> __('title', 'thim'),
					),
					'default'	=> 'title',
				),

			// order
				't_order' => array(
					'type'		=> 'select',
					'label'		=> __('Order', 'thim'),
					'options'	=> array(
						'asc'	=> __('ASC', 'thim'),
						'desc'	=> __('DESC', 'thim'),
					),
					'default'	=> 'asc',
				), 

			 // config
				't_config' => array(
					'type'		=> 'section',
					'label'		=> __('Config', 'thim'),
					'fields'	=> array(
                        //bg_color
                        'bg_color' => array(
                            'type'		=> 'color',
                            'label'		=> __('Background color', 'thim'),
                            'default'	=> '#85b200',
                        ),
					 // text color
						't_text_color' => array(
							'type'		=> 'color',
							'label'		=> __('Content color', 'thim'),
							'default'	=> '#111',
						),
					),
				),

			// show next and previous button
				't_show_button' => array(
					'type'		=> 'checkbox',
					'label'		=> __('Show next button and previous button', 'thim'),
					'default'	=> 0,
				),

			), // end options

			TP_THEME_DIR . 'inc/widgets/testimonials/'
		);
	}

	/**
	 * Initialize the CTA widget
	 */
	

	function get_template_name($instance) {
		return 'base';
	}

	function get_style_name($instance) {
		return false;
	}

	function enqueue_frontend_scripts(){
		wp_enqueue_script('thim-testimonial', TP_THEME_URI .'inc/widgets/testimonials/js/thim.testimonials.js', array( 'jquery' ), '', true  );
	}
}