<?php 

/*
Plugin Name: Vue Plugin
Description: This plugin displays vue block data.
Version: 1.0
Author: Zach
*/

function enqueue_vite_assets() {
    wp_enqueue_script('vite-js', plugin_dir_url( __FILE__ ) . 'vue-plugin/dist/assets/index-DHeWgtsH.js', array(), null, true );
    wp_enqueue_style('vite-css', plugin_dir_url( __FILE__ ) . 'vue-plugin/dist/assets/index-BF96SgiK.css', array(), null );
}

add_action( 'wp_enqueue_scripts', 'enqueue_vite_assets' );


// Shortcode to embed Vue app
function vue_app_shortcode() {
    return '<div id="vue-plugin"></div>';
}
add_shortcode('vue_app', 'vue_app_shortcode');


/* function register_my_block_type() {
    wp_register_script(
        'vue-block-script',
        plugins_url( 'dist/assets/index-C8R7yiNw.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element', 'wp-editor', 'vue' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'dist/assets/index-C8R7yiNw.js' ) // For cache-busting
    );

    register_block_type( __DIR__ . 'vue-plugin/block.json', array(
        'editor_script' => 'vue-block-script',
    ) );
}

add_action( 'init', 'register_my_block_type' ); */