<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of customizer-options
 *
 * @author Tuannv
 */
require_once "generate-less-to-css.php";

class Customize_Options {

    function __construct() {
        add_action('tf_create_options', array($this, 'create_customizer_options'));
        add_action('customize_save_after', array($this, 'generate_to_css'));

        /* Unregister Default Customizer Section */
        add_action('customize_register', array($this, 'unregister'));
    }
    function unregister( $wp_customize ) {

        $wp_customize->remove_section( 'colors' );
        $wp_customize->remove_section( 'background_image' );
        $wp_customize->remove_section( 'title_tagline' );
        $wp_customize->remove_section( 'nav' );
        //$wp_customize->remove_section( 'static_front_page' );

    }
    function create_customizer_options() {
        $titan = TitanFramework::getInstance('thim');

        /* Register Customizer Sections */
        foreach (array_reverse(glob(TP_THEME_DIR."/inc/admin/customizer-sections/*.php")) as $filename) {
            include $filename;
        }

//        /* Register Metabox Sections */
//        foreach (array_reverse(glob(TP_THEME_DIR."/inc/admin/metabox-sections/*.php")) as $filename) {
//            include $filename;
//        }
    }

    function generate_to_css() {
        $options = get_theme_mods();
        themeoptions_variation( $options );
        generate( TP_THEME_DIR . 'style', '.css', $options );
    }
}

new customize_options();