<?php
/**
 * Created by PhpStorm.
 * User: Tuan
 * Date: 5/12/14
 * Time: 3:19 PM
 */
global $theme_options_data;

$sticky_custom = '';
//if ( $theme_options_data['thim_config_att_sticky'] == 'sticky_custom' ) {
//	$sticky_custom = ' sticky-custom';
//}

$width_logo = 2;
if ( isset( $theme_options_data['thim_width_logo'] ) ) {
	$width_logo = (int) ( $theme_options_data['thim_width_logo'] / 8.3 );
}
$width_menu = 12 - $width_logo;
if( isset( $theme_options_data['thim_show_border_bottom_header'] ) && $theme_options_data['thim_show_border_bottom_header'] ==1 ){
    $border_header ='border-bottom';
}
else{
    $border_header = 'no-border-bottom';
}
if ( $theme_options_data['thim_topbar_show'] == '1' ) {
	$class_logo = 'has-topbar';
} else{
	$class_logo = 'no-topbar';
}
?>
<!-- <div class="main-menu"> -->
<div class="navigation affix-top<?php echo esc_attr( $sticky_custom ) ?> <?php echo '' . $border_header .' ' . $class_logo . ''; ?>" <?php if ( isset( $theme_options_data['thim_header_sticky'] ) && $theme_options_data['thim_header_sticky'] == 1 ) {
	echo 'data-spy="affix" data-offset-top="' . esc_attr( $theme_options_data['thim_header_height_sticky'] ) . '" ';
} ?>>
	<?php if ( $theme_options_data['thim_header_layout'] == 'wide' || $theme_options_data['thim_header_sticky'] == 1 ) {
		echo '<div class="container">';
	} ?>
	<div class="row tm-table">
		<div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</div>
		<div class="col-sm-<?php echo esc_attr( $width_logo ); ?> table-cell sm-logo">
			<?php
			do_action('thim_logo');
			do_action( 'thim_sticky_logo' );
			?>
		</div>
		<nav class="col-sm-<?php echo esc_attr( $width_menu ); ?> table-cell table-right" role="navigation">
			<?php get_template_part( 'inc/header/main-menu' ); ?>
		</nav>
	</div>
	<?php if ( $theme_options_data['thim_header_layout'] == 'wide' || $theme_options_data['thim_header_sticky'] == 1 ) {
		echo '</div>';
	} ?>
	<!--end .row-->
</div>