<?php
/**
 * Plugin Name: Custom Plugin
 * Plugin URI: https://github.com/MBNDEV/custom-plugin
 * Description: Custom Plugin for MBN
 * Version: 1.0.6
 * Author: My Biz Niche
 * Author URI: https://www.mybizniche.com/
 * License: GPL2
 * Text Domain: custom-plugin
 *
 * @package CustomPlugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'YahnisElsts\PluginUpdateChecker\v5\PucFactory' ) ) {
  require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
}

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
PucFactory::buildUpdateChecker(
  'https://github.com/MBNDEV/custom-plugin',
  __FILE__,
  'custom-plugin'
);
