<?php

function customcss() {
    $thim_options = get_theme_mods();
    $custom_css   = '';

    $width_logo   = $thim_options['thim_width_logo'];
    $width_banner = ( 100 - $width_logo ) / 2;

    // Headerbar
    $custom_css .= '.wrapper-logo.navigation .header-bar-left,
	 .wrapper-logo.navigation .header-bar-right{
				width: ' . $width_banner . '% !important;
	}
	.wrapper-logo.navigation .thim-logo {
				width: ' . $width_logo . '% !important;
	}';
	if ( isset( $thim_options['thim_user_bg_pattern'] ) && $thim_options['thim_user_bg_pattern'] == '1' ) {
		$custom_css .= ' body{background-image: url("' . $thim_options['thim_bg_pattern'] . '"); }
 		';
	}
	if ( isset( $thim_options['thim_bg_pattern_upload'] ) && $thim_options['thim_bg_pattern_upload'] <> '' ) {
		$bg_body = wp_get_attachment_image_src( $thim_options['thim_bg_pattern_upload'], 'full' );
		$custom_css .= ' body{background-image: url("' . $bg_body[0] . '"); }
						body{
							 background-repeat: ' . $thim_options['thim_bg_repeat'] . ';
							 background-position: ' . $thim_options['thim_bg_position'] . ';
							 background-attachment: ' . $thim_options['thim_bg_attachment'] . ';
							 background-size: ' . $thim_options['thim_bg_size'] . ';
						}
 		';
	}
    return $custom_css;
}

function themeoptions_variation( $data ) {
    $theme_options = array(
        'thim_body_bg_color',
        'thim_body_primary_color',

        // font body
        'thim_font_body',
        'thim_font_title',
        'thim_font_h1',
        'thim_font_h2',
        'thim_font_h3',
        'thim_font_h4',
        'thim_font_h5',
        'thim_font_h6',
        // top header
        'thim_font_size_top_header',
        'thim_bg_top_color',
        'thim_top_header_text_color',
        'thim_top_header_link_color',
        'thim_header_border_color',

        // main menu
        'thim_bg_header_color',
        'thim_header_text_color',
        'thim_bg_main_menu_color',
        'thim_main_menu_text_color',
        'thim_main_menu_text_hover_color',
        'thim_font_size_main_menu',
        'thim_font_weight_main_menu',
        //'thim_bg_sub_menu',
        //sub_menu
        'thim_bg_sub_menu_color',
        //'thim_bg_sub_menu_color_hover',
        'thim_border_sub_menu',
        'thim_sub_menu_text_color',
        'thim_sub_menu_text_color_hover',
        'thim_body_second_color',
        'thim_text_second_color',

        //mobile menu
        'thim_bg_mobile_menu_color',
        'thim_mobile_menu_text_color',
        'thim_mobile_menu_text_hover_color',
        'thim_font_size_mobile_menu',

        // footer
        //'thim_footer_text_font',
        //'thim_footer_title_font',
        'thim_footer_bg_color',
		'thim_footer_text_color',
        //'thim_footer_bg_image',
        //'thim_footer_border_color',
//		'thim_footer_top_bg_color',
//        'thim_footer_bottom_bg_color',
//		'thim_footer_top_text_color',
//        'thim_footer_title_bg_color',
        //'thim_show_border_column',

// coppyright
//        'thim_copyright_border_top_color',
        'thim_copyright_bg_color',
        'thim_copyright_text_color',
    );

    $config_less = '';
    foreach ( $theme_options AS $key ) {
        $option_data = $data[@$key];
        //data[key] is serialize
        if ( is_serialized( $data[@$key] ) || is_array( $data[@$key] ) ) {
            $config_less .= convert_font_to_variable( $data[@$key], $key );
        } else {
            $config_less .= "@{$key}: {$option_data};\n";
        }
    }

    // Write it down to config.less file
    $fileout = TP_THEME_DIR . "less/config.less";
    if ( !file_put_contents( $fileout, $config_less, LOCK_EX ) ) {
        @chmod( $fileout, 0777 );
        file_put_contents( $fileout, $config_less, LOCK_EX );
    }
}

function convert_font_to_variable( $data, $tag ) {
    //is_serialized
    $value = '';
    if ( is_serialized( $data ) ) {
        $data = unserialize( $data );
    }
    if ( isset( $data['font-family'] ) ) {
        $value = "@{$tag}_font_family: {$data['font-family']};\n";
    }
    if ( isset( $data['color-opacity'] ) ) {
        $value .= "@{$tag}_color: {$data['color-opacity']};\n";
    }
    if ( isset( $data['font-weight'] ) ) {
        $value .= "@{$tag}_font_weight: {$data['font-weight']};\n";
    }
    if ( isset( $data['font-style'] ) ) {
        $value .= "@{$tag}_font_style: {$data['font-style']};\n";
    }
    if ( isset( $data['text-transform'] ) ) {
        $value .= "@{$tag}_text_transform: {$data['text-transform']};\n";
    }
    if ( isset( $data['font-size'] ) ) {
        $value .= "@{$tag}_font_size: {$data['font-size']};\n";
    }
    if ( isset( $data['line-height'] ) ) {
        $value .= "@{$tag}_line_height: {$data['line-height']};\n";
    }

    return $value;
}


// get data customizer
global $theme_options_data;
$theme_options_data = get_theme_mods();