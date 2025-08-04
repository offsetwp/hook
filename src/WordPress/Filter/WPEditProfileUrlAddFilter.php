<?php
/**
 * WPEditProfileUrlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the URL for a user's profile editor.
 *
 * @since 3.1.0
 */
abstract class WPEditProfileUrlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'edit_profile_url';

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
	 * @param string $url The complete URL including scheme and path.
	 * @param int $user_id The user ID.
	 * @param string $scheme Scheme to give the URL context. Accepts 'http', 'https', 'login', 'login_post', 'admin', 'relative' or null.
	 */
	abstract public function execute( $url, $user_id, $scheme );
}
