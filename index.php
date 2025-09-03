<?php
/**
 * Plugin Name: Polaris RDS Configuration
 * Description: Polaris RDS configuration plugin easily manage spec file settings, download both default and latest spec files, and upload various spec files including feature, style, nav, tracking, and image alt. Enhance your site's functionality and maintain seamless updates effortlessly.
 * Author: Bluecorona
 * Author URI: https://www.bluecorona.com/
 * Version: 2.0.7
 * Text Domain: csv
 * Domain Path: /languages
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) exit;


if (file_exists(ABSPATH . '/version_control/plugin-update-checker/plugin-update-checker.php')) {
    require_once(ABSPATH . '/version_control/plugin-update-checker/plugin-update-checker.php');
}
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

if (defined('RDS_CONFIGURATION_REPO') && defined('GIT_BRANCH') && defined('GIT_AUTHENTICATION')) {


$myUpdateChecker = PucFactory::buildUpdateChecker(
	RDS_CONFIGURATION_REPO,
	__FILE__,
	'rds-configuration-plugin'
);

$myUpdateChecker->setBranch(GIT_BRANCH);

$myUpdateChecker->setAuthentication(GIT_AUTHENTICATION);
}


