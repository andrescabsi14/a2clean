<?php
$counters_value = $counters_label = $jugas_animation = $icon = $label = $counter_color =  $label_color = $counters_value_color ='';
$jugas_animation .= thim_getCSSAnimation( $instance['css_animation'] );

if ( $instance['counters_label'] <> '' ) {
	$counters_label = $instance['counters_label'];
}
$label_color = $counters_value_style = '';
//label

if ( $instance['label_group']['label_color'] <> '' ) {
	$label_color .= 'color:' . $instance['label_group']['label_color'] . ';';
}
if ( $instance['label_group']['label_font_size'] <> '' ) {
	$label_color .= 'font-size:' . $instance['label_group']['label_font_size'] . 'px;';
}
if ( $instance['label_group']['label_font_weight'] <> '' ) {
	$label_color .= 'font-weight:' . $instance['label_group']['label_font_weight'] . ';';
}
$style_label = 'style="' . $label_color . '"';

//counter value
if ( $instance['counters_value_group']['counters_value_color'] <> '' ) {
	$counters_value_style .= 'color:' . $instance['counters_value_group']['counters_value_color'] . ';';
}
if ( $instance['counters_value_group']['counters_value_font_size'] <> '' ) {
	$counters_value_style .= 'font-size:' . $instance['counters_value_group']['counters_value_font_size'] . 'px;';
}
if ( $instance['counters_value_group']['counters_value_font_weight'] <> '' ) {
	$counters_value_style .= 'font-weight:' . $instance['counters_value_group']['counters_value_font_weight'] . ';';
}
$style_counter = 'style="' . $counters_value_style . '"';

//icon
$icon_color = '';
if ( $instance['icon_group']['icon_color'] <> '' ) {
	$icon_color .= 'color:' . $instance['icon_group']['icon_color'] . ';';
}
$icon_color .= ( $instance['icon_group']['icon_background_color'] != '' ) ? 'background: ' . $instance['icon_group']['icon_background_color'] . ';' : 'background: transparent;';

if ( $instance['icon_group']['icon_font_size'] <> '' ) {
	$icon_color .= 'font-size:' . $instance['icon_group']['icon_font_size'] . 'px;';
}
$icon_color_style = 'style= " '. $icon_color .' " ';

if ( $instance['counters_value'] <> '' ) {
	$counters_value = $instance['counters_value'];
}
if ( $instance['icon'] == '' ) {
	$instance['icon'] = 'none';
}
if ( $instance['icon'] != 'none' ) {
	$icon = '<span  class="pe-7s-' . $instance['icon'] . ' " ' . $icon_color_style . ' ></>';
}

echo '<div class="counter-box ' . $jugas_animation . '">';
if ( $icon ) {
	echo '<div class="icon-counter-box">' . $icon . '</div>';
}
if ( $counters_label != '' ) {
	$label = '<sub class="counter-box-content" '.$style_label.'>' . $counters_label . '</sub>';
}
if ( $counters_value != '' ) {
	echo '<div class="content-box-percentage"><span class="display-percentage" ' . $style_counter . ' data-percentage="' . $counters_value . '">' . $counters_value . '</span>' . $label . '</div>';
}
echo '</div>';

?>