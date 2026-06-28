<?php
/**
 * Plugin Name: DB News Publisher
 * Plugin URI: https://donyayebank.ir
 * Description: سیستم اختصاصی تحریریه و انتشار سریع اخبار دنیای بانک
 * Version: 0.2.0
 * Requires at least: 6.8
 * Requires PHP: 8.1
 * Author: DonyayeBank
 * Author URI: https://donyayebank.ir
 * License: GPL-2.0+
 * Text Domain: db-news-publisher
 */

defined('ABSPATH') || exit;

/*
|--------------------------------------------------------------------------
| Plugin Constants
|--------------------------------------------------------------------------
*/

define('DBNP_VERSION', '0.2.0');
define('DBNP_FILE', __FILE__);
define('DBNP_PATH', plugin_dir_path(__FILE__));
define('DBNP_URL', plugin_dir_url(__FILE__));

/*
|--------------------------------------------------------------------------
| Load Classes
|--------------------------------------------------------------------------
*/

require_once DBNP_PATH . 'includes/class-admin.php';
require_once DBNP_PATH . 'includes/class-assets.php';
require_once DBNP_PATH . 'includes/class-dashboard.php';
require_once DBNP_PATH . 'includes/class-news.php';
require_once DBNP_PATH . 'includes/class-settings.php';

/*
|--------------------------------------------------------------------------
| Bootstrap Plugin
|--------------------------------------------------------------------------
*/

final class DB_News_Publisher {

    private static $instance = null;

    public static function instance() {

        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct() {

        add_action('plugins_loaded', array($this, 'init'));

    }

    public function init() {

        new DBNP_Admin();
        new DBNP_Assets();
        new DBNP_Dashboard();
        new DBNP_News();
        new DBNP_Settings();

    }

}

DB_News_Publisher::instance();
