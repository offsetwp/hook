<?php
/**
 * WPCanAddUserToBlogAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether a user should be added to a site.
 *
 * @since 4.9.0
 */
abstract class WPCanAddUserToBlogAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'can_add_user_to_blog';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param true|\WP_Error $retval True if the user should be added to the site, error object otherwise.
	 * @param int $user_id User ID.
	 * @param string $role User role.
	 * @param int $blog_id Site ID.
	 */
	abstract public function execute( $retval, $user_id, $role, $blog_id );
}
