<?php
/**
 * Description
 *
 * @package     n8finch\dev\functions
 * @since       1.0.0
 * @author      n8finch
 * @link        https://n8finch.com
 * @license     GNU General Public License
 */

namespace n8finch\dev\functions;


/**
 * Loads Non-Admin Files
 *
 * Comment/Uncomment when you need them
 */
function load_nonadmin_files() {
	$filenames = array(
		'setup.php',
		'components/customizer/css-handler.php',
		'components/customizer/helpers.php',
		'functions/formatting.php',
		'functions/load-assets.php',
		'functions/markup.php',
		'structure/comments.php',
		'structure/footer.php',
		'structure/front-page.php',
		'structure/header.php',
//		'structure/home.php',
		'structure/menu.php',
		'structure/page.php',
		'structure/post.php',
		'structure/sidebar.php',
	);

	load_specified_files( $filenames );
}

add_action( 'admin_init', __NAMESPACE__ . '\load_admin_files');
/**
 * Loads Admin Files
 *
 * Comment/Uncomment when you need them
 */
function load_admin_files() {

	$filenames = array(
		'components/customizer/customizer.php',
	);

	load_specified_files( $filenames );
}


/**
 * Load each of the specified files
 *
 * @param array $filnames
 * @param string $folder_root
 */
function load_specified_files( array $filnames, $folder_root = '' ) {
	$folder_root = $folder_root ?: CHILD_THEME_DIR . '/lib/';

	foreach ( $filenames as $filename ) {
		include( $folder_lib_root . $filename );
	}
}

load_nonadmin_files();