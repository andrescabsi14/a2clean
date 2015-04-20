<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package thim
 */
if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<div id="secondary" class="widget-area col-sm-4 col-md-4" role="complementary">
    <div id="search-post">
        <?php get_search_form(); ?>
    </div>
    <?php dynamic_sidebar('sidebar-1'); ?>
</div><!-- #secondary -->
