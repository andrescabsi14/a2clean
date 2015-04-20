<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package thim
 */

get_header(); ?>
<?php
global $theme_options_data;

$class_layout = 'col-sm-8 alignright';
$sidebar_cl   = " sidebar-left";

$layout_front_page = '2c-l-fixed';
if ( isset( $theme_options_data['thim_front_page_layout'] ) ) {
	$layout_front_page = $theme_options_data['thim_front_page_layout'];
	if ( $theme_options_data['thim_front_page_layout'] == '2c-r-fixed' ) {
		$class_layout = "col-sm-8 alignleft";
		$sidebar_cl   = " sidebar-right";
	}
	if ( $theme_options_data['thim_front_page_layout'] == '1col-fixed' ) {
		$class_layout = "col-sm-12 full-width";
		$sidebar_cl   = '';
	}
}

?>

	<main id="main" class="site-main" role="main">
		<?php
		$text_color   = "#333";
		$custom_title = $text_color = $bg_color = $hide_breadcrubs = $height = $c_css = '';
		$height       = 'height:100px';
		if ( isset( $theme_options_data['thim_front_page_custom_title'] ) && $theme_options_data['thim_front_page_custom_title'] <> '' ) {
			$custom_title = $theme_options_data['thim_front_page_custom_title'];
		}
		if ( isset( $theme_options_data['thim_front_page_text_color'] ) && $theme_options_data['thim_front_page_text_color'] <> '' ) {
			$text_color = 'style="color: ' . $theme_options_data['thim_front_page_text_color'] . '"';
		}
		if ( isset( $theme_options_data['thim_front_page_bg_color'] ) && $theme_options_data['thim_front_page_bg_color'] <> '' ) {
			$bg_color = 'background: ' . $theme_options_data['thim_front_page_bg_color'] . ';';
		}
		if ( isset( $theme_options_data['thim_front_page_height_heading'] ) && $theme_options_data['thim_front_page_height_heading'] <> '' ) {
			$height = 'height:' . $theme_options_data['thim_front_page_height_heading'] . 'px;';
		}

		if ( $height || $bg_color ) {
			$c_css = ' style="' . $bg_color . $height . '"';
		}

		if ( $custom_title <> "" ) {
			?>
			<div class="top_site_main <?php echo esc_attr($theme_options_data['thim_header_style']); ?>"<?php echo ent2ncr($c_css); ?>>
				<div class="container page-title-wrapper" <?php echo ent2ncr($text_color); ?>>
					<?php
					echo '<div class="breadcrumbs width100">';
                    echo '<a href="' . esc_url( home_url() ) . '" class="home-index">' . __( "Home", 'thim' ) . '</a>';
					echo  esc_attr($custom_title);
					echo '</div>';
					?>
				</div>
			</div>
		<?php
		}
		?>
		<div class="container home-content content-front-page <?php echo esc_attr( $sidebar_cl ) ?>">
			<div class="row">
				<div class="page-content-front-page <?php echo esc_attr( $class_layout ); ?>">
					<?php if ( have_posts() ) : ?>
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php
							get_template_part( 'content' );
							?>
						<?php endwhile; ?>
						<?php
						/* Paging Type */
						thim_paging_nav();
						?>
					<?php else : ?>
						<?php get_template_part( 'content', 'none' );
					endif;
					echo '</div>';
					if ( $class_layout != "col-sm-12 full-width" ) {
						get_sidebar();
					}
					?>
				</div>
			</div>
	</main>
	<!-- #main -->
<?php get_footer(); ?>