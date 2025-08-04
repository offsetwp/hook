<?php
/**
 * WPPreGetAvatarDataAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to retrieve the avatar URL early.
 *
 * @since 4.2.0
 */
abstract class WPPreGetAvatarDataAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_get_avatar_data';

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
	public int $hook_accepted_args = 2;


	/**
	 * The hook execution method
	 *
	 * @param array $args Arguments passed to get_avatar_data(), after processing.
	 * @param mixed $id_or_email The avatar to retrieve. Accepts a user ID, Gravatar SHA-256 or MD5 hash, user email, WP_User object, WP_Post object, or WP_Comment object.
	 */
	abstract public function execute( $args, $id_or_email );
}
