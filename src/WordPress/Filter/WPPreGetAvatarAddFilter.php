<?php
/**
 * WPPreGetAvatarAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Allows the HTML for a user's avatar to be returned early.
 *
 * @since 4.2.0
 */
abstract class WPPreGetAvatarAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_get_avatar';

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
	 * @param string|null $avatar HTML for the user's avatar. Default null.
	 * @param mixed $id_or_email The avatar to retrieve. Accepts a user ID, Gravatar MD5 hash, user email, WP_User object, WP_Post object, or WP_Comment object.
	 * @param array $args Arguments passed to get_avatar_url(), after processing.
	 */
	abstract public function execute( $avatar, $id_or_email, $args );
}
