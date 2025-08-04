<?php
/**
 * WPPreCountUsersAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the user count before queries are run.
 *
 * @since 5.1.0
 */
abstract class WPPreCountUsersAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_count_users';

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
	 * @param null|array $result The value to return instead. Default null to continue with the query.
	 * @param string $strategy Optional. The computational strategy to use when counting the users. Accepts either 'time' or 'memory'. Default 'time'.
	 * @param int $site_id The site ID to count users for.
	 */
	abstract public function execute( $result, $strategy, $site_id );
}
