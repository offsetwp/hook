<?php
/**
 * WPGetBlogsOfUserAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of sites a user belongs to.
 *
 * @since MU ( 3.0.0 ) MU ( 3.0.0 )
 */
abstract class WPGetBlogsOfUserAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_blogs_of_user';

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
	 * @param object[] $sites An array of site objects belonging to the user.
	 * @param int $user_id User ID.
	 * @param bool $all Whether the returned sites array should contain all sites, including those marked 'deleted', 'archived', or 'spam'. Default false.
	 */
	abstract public function execute( $sites, $user_id, $all );
}
