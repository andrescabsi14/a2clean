<?php
global $theme_options_data;
$class_container = $sticky_custom = '';
if ( $theme_options_data['thim_header_layout'] == 'wide' ) {
	$class_container = ' container';
}
//if ( $theme_options_data['thim_config_att_sticky'] == 'sticky_custom' ) {
//	$sticky_custom = ' sticky-custom';
//}

$width_logo = 3;
if ( isset( $theme_options_data['thim_width_logo'] ) ) {
	$width_logo = (int) ( $theme_options_data['thim_width_logo'] / 8.3 );
}
$width_menu = 12 - $width_logo;

if ( is_active_sidebar( 'header_right' ) ) {
	$header_right_css = "";
} else {
	$header_right_css = " no_header_right";
}
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

<div class="wrapper-logo navigation affix-top <?php echo  esc_attr( $class_logo )?> <?php echo  esc_attr( $border_header) ?>  <?php echo esc_attr( $class_container . $header_right_css ); ?>" <?php if ( isset( $theme_options_data['thim_header_sticky'] ) && $theme_options_data['thim_header_sticky'] == 1 ) {
    echo 'data-spy="affix" data-offset-top="' . esc_attr( $theme_options_data['thim_header_height_sticky'] ) . '" ';
} ?>>
	<div class="tm-table">
        <div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        <?php if ( is_active_sidebar( 'header_left' ) ) : ?>
            <div class="table-cell header-bar-left header-menu">
                <?php dynamic_sidebar( 'header_left' ); ?>
            </div><!-- col-sm-6 -->
        <?php endif; ?>
        <div class="table-cell thim-logo ">
			<?php do_action('thim_logo'); ?>
  		</div>
        <div class="table-cell thim-logo sm-logo-affix">
			<?php do_action( 'thim_sticky_logo' ); ?>
        </div>
        <?php if ( is_active_sidebar( 'header_right' ) ) : ?>
            <div class="table-cell header-bar-right header-menu">
                <!-- <div class="header-right"> -->
                <?php dynamic_sidebar( 'header_right' ); ?>
                <!-- </div> -->
            </div><!-- col-sm-6 -->
        <?php endif; ?>

	</div>
	<!--end container tm-table-->
</div>
<!--end wrapper-logo-->


