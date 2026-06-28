<?php
/**
 * Plugin Name: DB News Publisher
 * Plugin URI: https://donyayebank.ir
 * Description: سیستم اختصاصی تحریریه و انتشار سریع اخبار دنیای بانک
 * Version: 0.2.0
 * Requires at least: 6.8
 * Requires PHP: 8.1
 * Author: DonyayeBank
 * License: GPL-2.0+
 * Text Domain: db-news-publisher
 */

defined('ABSPATH') || exit;

define('DBNP_VERSION', '0.2.0');
define('DBNP_PLUGIN_FILE', __FILE__);
define('DBNP_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('DBNP_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once DBNP_PLUGIN_PATH . 'includes/class-admin.php';

new DBNP_Admin();
