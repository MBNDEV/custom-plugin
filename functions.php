<?php
/**
 * Plugin Name: Custom Plugin
 * Plugin URI: https://github.com/MBNDEV/custom-plugin
 * Description: Custom Plugin for MBN
 * Version: 1.0.10
 * Author: My Biz Niche
 * Author URI: https://www.mybizniche.com/
 * License: GPL2
 * Text Domain: custom-plugin
 *
 * @package CustomPlugin
 */

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

PucFactory::buildUpdateChecker(
  'https://github.com/MBNDEV/custom-plugin',
  __FILE__,
  'custom-plugin'
);
