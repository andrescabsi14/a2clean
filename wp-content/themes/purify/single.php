<?php
/**
 * The template for displaying all single posts.
 *
 * @package thim
 */
?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'single' ); ?>
	<div class="share-post">
		<ul>
			<li><span><?php esc_attr_e('Share:','thim')?> </span></li>
			<li><a class="facebook-share js-facebook-share" target="_blank" href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php the_permalink() ?>&p[images][0]=<?php $thumb; ?>&p[title]=<?php echo str_replace(" ", "+", $post->post_title) ?>&p[summary]=<?php echo str_replace(" ", "+", get_the_excerpt() ) ?>"><i class="fa fa-facebook"></i>
				</a>
			</li>
			<li><a target="_blank" href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>"><i class="fa fa-twitter"></i>
				</a></li>
			<li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php the_permalink(); ?>"><i class="fa fa-linkedin"></i>
				</a></li>
		</ul>
	</div>
    <?php thim_post_nav(); ?>

    <?php
    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
    ?>
<?php endwhile; // end of the loop.