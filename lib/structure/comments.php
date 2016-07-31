<?php
/**
 * Description
 *
 * @package     n8finch\dev\structure
 * @since       1.0.0
 * @author      n8finch
 * @link        https://n8finch.com
 * @license     GNU General Public License
 */

namespace n8finch\dev\structure;

add_filter( 'genesis_comment_list_args', __NAMESPACE__ . '\setup_comments_gravatar' );

/**
 * Modify size of the Gravatar in the entry comments
 *
 * @param array $args
 *
 * @return array
 */
function setup_comments_gravatar( array $args ) {

	$args['avatar_size'] = 60;

	return $args;

}