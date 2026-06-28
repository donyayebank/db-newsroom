<?php
/**
 * مدیریت فایل‌های CSS و JS
 *
 * @package DB_News_Publisher
 */

defined( 'ABSPATH' ) || exit;

class DBNP_Assets {

    /**
     * Constructor
     */
    public function __construct() {

        add_action( 'admin_enqueue_scripts', array( $this, 'admin_assets' ) );

    }

    /**
     * بارگذاری فایل‌های پنل مدیریت
     */
    public function admin_assets() {

        wp_enqueue_style(
            'dbnp-admin',
            DBNP_URL . 'assets/css/admin.css',
            array(),
            DBNP_VERSION
        );

        wp_enqueue_script(
            'dbnp-admin',
            DBNP_URL . 'assets/js/admin.js',
            array( 'jquery' ),
            DBNP_VERSION,
            true
        );

    }

}
