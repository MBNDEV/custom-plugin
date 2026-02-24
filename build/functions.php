<?php

namespace _PhpScoperdd275a4cd119;

/**
 * Plugin Name: Custom Plugin
 * Plugin URI: https://github.com/MBNDEV/custom-plugin
 * Description: Custom Plugin for MBN
 * Version: 1.0.0
 * Author: My Biz Niche
 * Author URI: https://www.mybizniche.com/
 * License: GPL2
 * Text Domain: custom-plugin
 *
 * @package CustomPlugin
 */
$autoload = plugin_dir_path(__FILE__) . 'vendor/autoload.php';
if (\file_exists($autoload) && !\defined('CUSTOM_PLUGIN_VENDOR_LOADED')) {
    \define('CUSTOM_PLUGIN_VENDOR_LOADED', \true);
    require_once $autoload;
}
YahnisElsts\PluginUpdateChecker\v5\PucFactory::buildUpdateChecker('https://github.com/MBNDEV/custom-plugin', __FILE__, 'custom-plugin');
