<?php
$settings = array(
	'pagination' => true,
	'speed'      => $instance['thim_slider_speed'],
	'timeout'    => $instance['thim_slider_timeout'],
);

if ( empty( $instance['thim_slider_frames'] ) ) {
	return;
}

?>

<div class="ob-slider-base <?php if ( wp_is_mobile() ) {
	echo 'sow-slider-is-mobile';
} ?>" style="display: none">

	<ul class="ob-slider-images" data-settings="<?php echo esc_attr( json_encode( $settings ) ) ?>">
		<?php
		foreach ( $instance['thim_slider_frames'] as $key => $frame ) {
			if ( empty( $frame['thim_slider_background_image'] ) ) {
				$background_image = false;
			} else {
				$background_image = wp_get_attachment_image_src( $frame['thim_slider_background_image'], 'full' );
			}

			if ( empty( $frame['thim_slider_foreground_image'] ) ) {
				$foreground_image = false;
			} else {
				$foreground_image = wp_get_attachment_image_src( $frame['thim_slider_foreground_image'], 'full' );
			}

			?>
			<li
				class="ob-slider-image sow-slider-image-<?php echo esc_attr($frame['thim_slider_background_image_type']) ?>"
				style="<?php if ( !empty( $background_image[0] ) && ( !empty( $foreground_image ) ) || !empty( $frame['background_videos'] ) ) {
					echo 'background-image: url(' . $background_image[0] . ');';
				} ?>">
				<?php
				if ( !empty( $frame['thim_slider_background_image'] ) ) {
					echo wp_get_attachment_image( $frame['thim_slider_background_image'], 'full' );
				}
				if ( !empty( $frame['content']['thim_slider_title'] ) ) {
					if ( !empty( $frame['content']['extra_class'] ) ) {
						$extra_class = $frame['content']['extra_class'] . ' ';
					} else {
						$extra_class = '';
					}
					?>
					<div class="ob-slider-image-container <?php echo esc_attr($extra_class) . 'slider-' . esc_attr($frame['content']['thim_slider_align']) ?>">
						<div class="wrapper-container">
							<div class="container">
								<?php
								$button = $style_des = $style_heading = $style_opt = '';
								if ( $frame['content']['button_text'] <> '' ) {
									$button = '<a href="' . $frame['content']['button_link'] . '" class="btn">' . $frame['content']['button_text'] . ' <i class="fa fa-angle-right"></i></a>';
								}

								if ( $frame['content']['thim_color_des'] <> '' ) {
									$style_des = 'style="color:' . $frame['content']['thim_color_des'] . '"';
								}

								$style_opt .= ( $frame['content']['thim_color_title'] != '' ) ? 'color: ' . $frame['content']['thim_color_title'] . ';' : '';
								$style_opt .= ( $frame['content']['size'] != '' ) ? 'font-size: ' . $frame['content']['size'] . 'px;line-height:' . $frame['content']['size'] . 'px;' : '';

								if ( $style_opt <> '' ) {
									$style_heading = 'style="' . $style_opt . '"';
								}

								if ( !empty( $frame['content']['thim_slider_title'] ) ) {
									?>
									<h2 class="slider-title" <?php echo  ent2ncr($style_heading); ?>><?php echo  ent2ncr($frame['content']['thim_slider_title']); ?></h2>
								<?php
								}

								if ( !empty( $frame['content']['thim_slider_description'] ) ) {
									echo '<div class="slider-desc">';
									echo '<p ' . $style_des . '>' . $frame['content']['thim_slider_description'] . '</p>';
									echo  ent2ncr($button);
									echo '</div>';
								}
								?>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</li>
		<?php
		}
		?>
	</ul>
	<?php
		$pager =  $instance['thim_slider_pagination'];
		$controls = $instance['thim_slider_controls'];
	?>
	<?php if( $pager == 'show' ) : ?>
		<ol class="ob-slider-pagination">
			<?php foreach ( $instance['thim_slider_frames'] as $i => $frame ) : ?>
				<li><a href="#" data-goto="<?php echo esc_attr($i) ?>"><?php echo esc_attr($i + 1) ?></a></li>
			<?php endforeach; ?>
		</ol>
	<?php endif; ?>
	<?php if( $controls == 'show' ) : ?>
		<div class="ob-slide-nav ob-slide-nav-next">
			<a href="#" data-goto="next" data-action="next">
				<i class="fa fa fa-angle-right"></i>
			</a>
		</div>

		<div class="ob-slide-nav ob-slide-nav-prev">
			<a href="#" data-goto="previous" data-action="prev">
				<i class="fa fa fa-angle-left"></i>
			</a>
		</div>
	<?php endif; ?>
</div>