<?php

$css = $css_heading = $css_content = $text_color = $text_align = $data_show_button = '';

// text align
$text_align = $instance['t_text_align'] ? $instance['t_text_align'] : 'left';

// avatar
$avatar = $instance['t_avatar'] ? $instance['t_avatar'] : 'av_left';

// content color
$text_color = $instance['t_config']['t_text_color'] ? $instance['t_config']['t_text_color'] : '#111';


//bg_color
$bg_color = $instance['t_config']['bg_color'] ? $instance['t_config']['bg_color'] : 'transparent';


// nuber post view
$num_posts = $instance['t_num_posts'] ? $instance['t_num_posts'] : 3;

// order by
$order_by = $instance['t_order_by'] ? $instance['t_order_by'] : '';

// order
$order = $instance['t_order'] ? $instance['t_order'] : '';

// show button
$show_button = $instance['t_show_button'] ? 1 : 0;




$query_args = array(
	'posts_per_page' => $num_posts,
	'post_type'      => 'testimonials',
	'order'          => $order,
);

switch ( $order_by ) {
	case 'date' :
		$query_args['orderby'] = 'post_date';
		break;
	case 'title' :
		$query_args['orderby'] = 'post_title';
		break;
	case 'comment' :
		$query_args['orderby'] = 'comment_count';
		break;
	default : //random
		$query_args['orderby'] = 'rand';
}

$loop_posts = new WP_Query( $query_args );

//css
if ( $text_color ) {
	$text_color = 'color:' . $text_color . ';';
}

if ( $text_align ) {
	$text_align = 'text-align:' . $text_align . '';
}


$css = 'style="' . $text_color . $text_align . '"';


if ( $show_button == 1 ) {
	$data_show_button = 'data-show-button="' . $show_button . '"';
}

echo '<div class="wg-testimonials" style="background-color: '. $bg_color .'">';

if ( $loop_posts->have_posts() ) :
	echo '<div id="owl-demo" class="owl-carousel ' . esc_attr( $avatar ) . '" ' . $data_show_button . '>';
	while ( $loop_posts->have_posts() ) : $loop_posts->the_post();
		echo '<div class="item" ' . $css . '>';
		// image
		if ( has_post_thumbnail() ) {
			$thumb   = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumbnail' );
			$url_img = $thumb[0];
			if ( $url_img ) {
				echo '<img class="item-img" src="' . esc_url( $url_img ) . '" alt="' . esc_attr( get_the_title( get_the_ID() ) ) . '">';
			}
		}
		echo '<p class="item-testimonial">"' . esc_attr( get_the_content() ) . '"</p>';
		echo '<p class="item-writer-name" ' . $author_color_style . '><span>-</span>' . esc_attr( get_the_title( get_the_ID() ) ) . '</p>';
		if ( $web_link ) {
			echo '<p class="item-testimonial-information" ' . $link_color_style . '>' . esc_attr( $web_link ) . '</p>';
		}
		echo '</div>';
	endwhile;
	echo '</div>';
endif;
echo '</div>';
wp_reset_postdata();