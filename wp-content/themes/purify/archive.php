<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package thim
 */
?>

<?php
if ( have_posts() ) :
    /* Blog Type */

    if ( $select_style == 'masonry' ) {
        wp_enqueue_script( 'thim-isotope' );
        echo '<div class="blog-masonry">';
    } else {
//		$html= esc_html("<h2 class='box-heading'>");
        echo "<h2 class='box-heading'>";

        if ( is_category() ) :
            $catTitle = single_cat_title( "", false );
            $cat      = get_cat_ID( $catTitle );
            //var_dump($cat);
            echo get_the_category_by_ID( $cat );
        elseif ( is_author() ) :
            printf( __( 'Author: %s', 'thim' ), '<span class="vcard">' . esc_attr( get_the_author() ) . '</span>' );

        elseif ( is_day() ) :
            printf( __( 'Day: %s', 'thim' ), '<span>' . esc_attr( get_the_date() ) . '</span>' );

        elseif ( is_month() ) :
            printf( __( 'Month: %s', 'thim' ), '<span>' . esc_attr( get_the_date( _x( 'F Y', 'monthly archives date format', 'thim' ) ) ) . '</span>' );

        elseif ( is_year() ) :
            printf( __( 'Year: %s', 'thim' ), '<span>' . esc_attr( get_the_date( _x( 'Y', 'yearly archives date format', 'thim' ) ) ) . '</span>' );
        elseif ( is_search() ) :
            printf( __( 'Search Results for: %s', 'thim' ), '<span>' . get_search_query() . '</span>' );
        elseif ( is_404() ) :
            echo _e( '404', 'thim' );
        elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
            echo _e( 'Asides', 'thim' );

        elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
            echo _e( 'Galleries', 'thim' );

        elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
            echo _e( 'Images', 'thim' );

        elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
            echo _e( 'Videos', 'thim' );

        elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
            echo _e( 'Quotes', 'thim' );

        elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
            echo _e( 'Links', 'thim' );

        elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
            echo _e( 'Statuses', 'thim' );

        elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
            echo _e( 'Audios', 'thim' );

        elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
            echo _e( 'Chats', 'thim' );
        else :
            echo _e( 'Archives', 'thim' );
        endif;
        echo '</h2>';
        echo '<div class="article-list clearafter">';
    }
    /* Start the Loop */
    while ( have_posts() ) : the_post();
        if ( $select_style == 'masonry' ) {
            get_template_part( 'content', 'grid' );
        } else {
            get_template_part( 'content' );
        }
    endwhile;
    echo '</div>';

    /* Paging Type */
    //if ( $paging_style == "paging" ) {
    thim_paging_nav();
//	} else {
//		if ( $paging_style == "scroll" ) {
//			/* Enqueue infinitescroll script for scroll */
//			wp_enqueue_script( 'thim-infinitescroll' );
//			/* Enqueue audio script if current view has'nt audio post */
//			wp_enqueue_style( 'thim-pixel-industry' );
//			wp_enqueue_script( 'thim-jplayer' );
//
//			thim_paging_nav();
//		} else { /* btn load more */
//			/* Enqueue audio script if current view has'nt audio post */
//			wp_enqueue_style( 'thim-pixel-industry' );
//			wp_enqueue_script( 'thim-jplayer' );
//
//			$cate = get_category( $cat );
//			if ( $cate->category_count > get_option( 'posts_per_page' ) ) {
//				global $sidebar_thumb_size;
//				echo '<div class="blog_btn_load_more" style="text-align:center;"><a href="#" data-ajax_url="' . admin_url( 'admin-ajax.php' ) . '" data-size="' . $sidebar_thumb_size . '" data-type="' . $select_style . '" data-cat="' . $cat . '" data-offset="' . get_option( 'posts_per_page' ) . '" class="sc-btn big light">Load More</a></div>';
//			}
//		}
//	}
else :
    get_template_part( 'content', 'none' );
endif;