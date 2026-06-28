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
        ?>
        <div class="wrap">
            <h1>DB Newsroom</h1>
            <p><strong>نسخه 0.2.0</strong></p>
            <hr>
            <p>هسته افزونه با موفقیت بارگذاری شد.</p>
        </div>
        <?php
    }

}
