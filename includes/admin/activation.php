<?php/** * Plugin Activation * * @package    Church_Theme_Content * @subpackage Admin * @copyright  Copyright (c) 2013 - 2016, churchthemes.com * @link       https://github.com/churchthemes/church-theme-content * @license    GPLv2 or later * @since      0.9 */// No direct accessif ( ! defined( 'ABSPATH' ) ) exit;/** * Activation hook * * Flush rewrite rules so friendly URL's for custom post types and taxonomies take effect. * * @since 0.9 */function ctc_activation() {	add_action( 'init', 'ctc_flush_rewrite_rules', 11 ); // after post types, taxonomies registered}register_activation_hook( CTC_FILE, 'ctc_activation' );/** * Flush rewrite rules * * @since 0.9 */function ctc_flush_rewrite_rules() {	flush_rewrite_rules();}