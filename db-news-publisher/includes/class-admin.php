<?php
defined('ABSPATH') || exit;

class DBNP_Admin {

    public function __construct() {

        add_action('admin_menu', array($this, 'register_menu'));

    }

    public function register_menu() {

        add_menu_page(
            'DB Newsroom',
            '📰 DB Newsroom',
            'manage_options',
            'db-news-publisher',
            array($this, 'dashboard'),
            'dashicons-media-document',
            3
        );

    }

    public function dashboard() {

        $template = DBNP_PATH . 'templates/dashboard.php';

        if ( file_exists( $template ) ) {
            include $template;
        }

    }

}
