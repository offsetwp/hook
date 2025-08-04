<?php
/**
 * WPPreWpIsSiteInitializedAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the check for whether a site is initialized before the database is accessed.
 *
 * @since 5.1.0
 */
abstract class WPPreWpIsSiteInitializedAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_wp_is_site_initialized';

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
	 * @param bool|null $pre The value to return instead. Default null to continue with the check.
	 * @param int $site_id The site ID that is being checked.
	 */
	abstract public function execute( $pre, $site_id );
}
