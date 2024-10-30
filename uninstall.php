<?php
/**
 * Removes the Quicktags from the database
 *
 * @since 1.3.2
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

delete_option( 'jayj_qt_settings' );