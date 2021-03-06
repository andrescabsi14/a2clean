<?php
/**
 * The template for displaying search results pages.
 *
 * @package thim
 */
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
<!--        --><?php
//        $args = array(
//            'posts_per_page' =>-1,
//            'post_type'   =>$_GET['post_type'],
//            's' => $_GET['s']
//        );
//            query_posts($args);
//        ?>
        <?php if (have_posts()) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php printf(__('Search Results for: %s', 'thim'), '<span>' . get_search_query() . '</span>'); ?></h1>
            </header><!-- .page-header -->

            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php
                /**
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */
                get_template_part('content', 'search');
                ?>

            <?php endwhile; ?>

            <?php thim_paging_nav(); ?>

        <?php else : ?>

            <?php get_template_part('content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</section><!-- #primary -->