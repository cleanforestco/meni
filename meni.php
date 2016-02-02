<?php
/**
* Plugin Name: Meni
* Plugin URI: http://wordpress.org/plugins/meni/
* Description: Meni For the WordPress Admin Bar
* Author: Noam Eppel, CleanForest.co
* Version: 0.0.3
* Author URI: http://cleanforest.co/
*/

function meni_admin_bar_link() {
    global $wp_admin_bar;
    // we can add a top-level link
    $wp_admin_bar->add_menu(
        array(
            'id' => 'meni',
            'title' => __('&#8226;&#8226;&#8226;'),
            'href' => '#'
        )
    );
}
// hook our function
add_action( 'wp_before_admin_bar_render', 'meni_admin_bar_link', 5 );


function meni_admin_head_script() { ?>
    <style>
        .quicklinks li:not(#wp-admin-bar-meni) { display: none; }
    </style>
<?php }
add_action( 'admin_head', 'meni_admin_head_script', 5 ); // Load in WordPress Dashboard
add_action( 'wp_head', 'meni_admin_head_script', 5 ); // Load in Front-end


function load_meni_js() {
        wp_enqueue_script( 'meni_js', plugin_dir_url( __FILE__ ) . 'meni.js', array('jquery') );
}

add_action( 'admin_enqueue_scripts', 'load_meni_js' ); // Load in WordPress Dashboard
add_action( 'wp_enqueue_scripts', 'load_meni_js' ); // Load in Front-end
