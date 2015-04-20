<?php
/**
 * Created by PhpStorm.
 * User: Anh Tuan
 * Date: 11/29/2014
 * Time: 11:36 AM
 */
global $theme_options_data;
//$width_clumn = (int) ( $theme_options_data['thim_width_left_top'] / 8.3 );
//$width_top_sidebar_right = 12 - $width_clumn;

$width_logo = 3;
if ( isset( $theme_options_data['thim_width_logo'] ) ) {
	$width_logo = (int) ( $theme_options_data['thim_width_logo'] / 8.3 );
}
$offset = $width_logo;

?>

<?php if ( is_active_sidebar( 'toolbar' ) ) : ?>
	<div class="top-header">
		<?php
		if ( isset( $theme_options_data['thim_header_layout'] ) && $theme_options_data['thim_header_layout'] == 'wide' ) {
			echo "<div class=\"container\">";
			$row         = 'row';
			$classoffset = 'col-sm-' . $offset . '';
		} else {
			echo '<div class="container-top-head">';
			$row         = 'row-topbar';
			$classoffset = '';
		}
		?>
		<?php if ( is_active_sidebar( 'toolbar' ) ) : ?>
			<div class="<?php echo esc_attr( $row ); ?>">
				<?php
				if ( $classoffset != '' ) {
					echo '<div class="' . esc_attr( $classoffset ) . '"></div>';
				}
				?>
				<?php dynamic_sidebar( 'toolbar' ); ?>
				<div class="clear"></div>
			</div>
		<?php endif; ?>
		<?php if ( isset( $theme_options_data['thim_header_layout'] ) && $theme_options_data['thim_header_layout'] == 'wide' ) {
			echo "</div>";
		} else {
			echo '</div>';
		}
		?>
	</div><!--End/div.top-->
<?php
endif;