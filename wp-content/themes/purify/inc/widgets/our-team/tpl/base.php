<?php
/**
 * Created by PhpStorm.
 * User: Anh Tuan
 * Date: 12/3/2014
 * Time: 9:55 AM
 */

$number = $column = '';

$args_team = array(
    'posts_per_page' => $instance['number'],
    'post_type'      => 'our_team'
);

if ( $instance['column'] <> '' ) {
    $columns = 12 / $instance['column'];
} else {
    $columns = 4;
}
$our_team     = new WP_Query( $args_team );
if ( $our_team->have_posts() ) {
    echo '<div class="wrapper-lists-our-team"><ul>';
    while ( $our_team->have_posts() ): $our_team->the_post();
        $regency      = get_post_meta( get_the_ID(), 'regency', true );
        $link_face    = get_post_meta( get_the_ID(), 'face_url', true );
        $link_twitter = get_post_meta( get_the_ID(), 'twitter_url', true );
        $skype_url    = get_post_meta( get_the_ID(), 'skype_url', true );
        $rss_url      = get_post_meta( get_the_ID(), 'rss_url', true );
        $dribbble_url = get_post_meta( get_the_ID(), 'dribbble_url', true );
        $linkedin_url = get_post_meta( get_the_ID(), 'linkedin_url', true );

        $image_id  = get_post_thumbnail_id( $post->ID );
        $image_url = wp_get_attachment_image( $image_id, 'our_team', false, array( 'alt' => get_the_title(), 'title' => get_the_title() ) );
        echo '<li class="col-sm-' . $columns . '"><div class="content-list-our-team">';
        echo '<div class="our-team-image">' . $image_url . '</div>';
        echo '<div class="content-team">

								<h4>' . get_the_title( $post->ID ) . '</h4>';

        if ( $regency <> '' ) {
            echo '<div class = "regency">' . $regency . '</div>';
        }
        echo '
 			<ul class="social-team">';
        if ( $link_face <> '' ) {
            echo '<li><a class="fa-face" href="' . $link_face . '"><i class="fa fa-facebook"></i></a></li>';
        }
        if ( $link_twitter <> '' ) {
            echo '<li><a class="twitter" href="' . $link_twitter . '"><i class="fa fa-twitter"></i></a></li>';
        }
        if ( $skype_url <> '' ) {
            echo '<li><a class="skype" href="' . $skype_url . '"><i class="fa fa-skype"></i></a></li>';
        }
        if ( $linkedin_url <> '' ) {
            echo '<li><a class="linkedin" href="' . $linkedin_url . '"><i class="fa fa-linkedin"></i></a></li>';
        }
        if ( $rss_url <> '' ) {
            echo '<li><a class="rss" href="' . $rss_url . '"><i class="fa fa-rss"></i></a></li>';
        }
        if ( $dribbble_url <> '' ) {
            echo '<li><a class="dribble" href="' . $dribbble_url . '"><i class="fa fa-dribbble"></i></a></li>';
        }
        echo '</ul>';
        echo '<div class="desc-our-team">';
        the_content();
        echo'</div>';

        echo '</div><div class="clear"></div>';
        echo '</div></li>';
    endwhile;
    echo '<div class="clear"></div></div>';
    wp_reset_postdata();
}
