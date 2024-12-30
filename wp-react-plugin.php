<?php

/*
Plugin Name: WP React Plugin
Description: WP React Plugin
Version: 1.0.0
Author: Fuad Hasan Emon
Text Domain: wp-react-plugin

*/

class WP_React_Plugin {
    function __construct() {
        add_action('admin_menu', [$this, 'admin_menu_callback']);
        add_action('admin_enqueue_scripts', [$this, 'admin_enqueue']);
    }

    public function admin_enqueue() {
        wp_enqueue_script('admin-js', plugins_url('spa/build/admin.js', __FILE__), [], '1.0', true);
    }

    public function admin_menu_callback() {
        add_menu_page(
            __( 'Wp React Plugin', 'wp-react-plugin' ),
            __('WPRP', 'wp-react-plugin'), 
            'manage_options',
            'wp-react-plugin',
            [$this, 'admin_menu_callback_'],
            '',
            5
        );
    }

    public function admin_menu_callback_() {
        ?>

        <div class="wrap">
            <div id="wp-react-plugin-id"></div>
        </div>

        <?php
    }
}

new WP_React_Plugin();