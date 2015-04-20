<?php
/**
 * @package thim
 */
$classes   = array();
$classes[] = 'article';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
    <?php
    if(is_sticky()){
        $sidebar_thumb_size = 'full';
    }else{
        $sidebar_thumb_size = 'thumbnail';
    }

    if ( has_post_format( 'link' ) && thim_meta( 'thim_url' ) && thim_meta( 'thim_text' ) ) {
        ?>
        <div class="article-header">
            <?php thim_posted_on(); ?>
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        </div>
        <?php
        $url  = thim_meta( 'thim_url' );
        $text = thim_meta( 'thim_text' );

        if ( $url && $text ) {
            echo '<div class="article-content">
						<a class="link" href="' . esc_url( $url ) . '">' . esc_attr( $text ) . '</a>
					</div>';
        }
    } elseif ( has_post_format( 'quote' ) && thim_meta( 'thim_quote' ) && thim_meta( 'thim_author_url' ) ) {
        $quote      = thim_meta( 'thim_quote' );
        $author     = thim_meta( 'thim_author' );
        $author_url = thim_meta( 'thim_author_url' );
        if ( $author_url ) {
            $author = ' <a href=' . esc_url( $author_url ) . '>' . $author . '</a>';
        }
        if ( $quote && $author ) {
            echo '
					<header class="entry-header">
					<div class="box-header box-quote">
						<blockquote>' . $quote  . '<cite>' . $author . '</cite></blockquote>
					</div>
					</header>
					';
        }
    } //elseif ( has_post_format( 'audio' ) ) {
//        echo '
//					 <header class="entry-header">
// 						<h3 class="blog_title"><a href="' . esc_url( get_permalink( get_the_ID() ) ) . '" rel="bookmark">' . esc_attr( get_the_title( get_the_ID() ) ) . '</a></h3>
// 					</header>
//				 ';
    //}
    else {
        do_action( 'thim_entry_top', $sidebar_thumb_size );
        ?>
        <?php
            if( is_sticky() ){
                echo '<div class="article-info">';
            }
        ?>

            <div class="article-header">
                <?php thim_posted_on(); ?>
                <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            </div>
            <div class="article-content">
                <?php
                global $theme_options_data;
                $length = '50';
                if ( isset( $theme_options_data['thim_archive_excerpt_length'] ) ) {
                    $length = $theme_options_data['thim_archive_excerpt_length'];
                }
                echo thim_excerpt( $length ) . '... ';
                ?>
                <div class="article-read-more">
                    <a href="<?php the_permalink(); ?>" class="read-more"><?php echo _e( 'Read More', 'thim' ); ?></a>
                </div>
            </div>
        <?php
            if( is_sticky() ){
                echo '</div>';
            }
        ?>
    <?php } ?>
</article><!-- #post-## -->