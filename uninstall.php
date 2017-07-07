<?php
/**
 * BP Delegated XProfile uninstaller.
 *
 * @link https://developer.wordpress.org/plugins/the-basics/uninstall-methods/#uninstall-php
 *
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 *
 * @copyright Copyright (c) 2017 by Meitar Moscovitz
 *
 * @package WordPress\Plugin\BP_Delegated_XProfile\Uninstaller
 */

// Don't execute any uninstall code unless WordPress core requests it.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) { exit(); }

require_once plugin_dir_path( __FILE__ ) . 'bp-delegated-xprofile.php';

$my_prefix = BP_Delegated_XProfile::prefix;

// Delete usermeta.
delete_metadata( 'user', null, "{$my_prefix}user_delegate", null, true );
