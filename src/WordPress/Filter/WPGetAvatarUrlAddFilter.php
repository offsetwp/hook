<?php
/**
 * WPGetAvatarUrlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the avatar URL.
 *
 * @since 4.2.0
 */
abstract class WPGetAvatarUrlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_avatar_url';

	/**
	 * The callback to be run when the action is called.
	 *
	 * @var string
	 */
	public int $hook_priority = 10;

	/**
	 * Optional. Used to specify the order in which the functions associated with a particular action are executed. Lower numbers correspond with earlier execution, and functions with the same priority are executed in the order in which they were added to the action. Default 10.
	 *
	 * @var string
	 */
	public int $hook_accepted_args = 3;


	/**
	 * The hook execution method
	 *
	 * @param string $url The URL of the avatar.
	 * @param mixed $id_or_email The avatar to retrieve. Accepts a user ID, Gravatar SHA-256 or MD5 hash, user email, WP_User object, WP_Post object, or WP_Comment object.
	 * @param array $args Arguments passed to get_avatar_data(), after processing.
	 */
	abstract public function execute( $url, $id_or_email, $args );
}
