<?php
/**
 * WPMsUserListSiteActionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the action links displayed next the sites a user belongs to in the Network Admin Users list table.
 *
 * @since 3.1.0
 */
abstract class WPMsUserListSiteActionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'ms_user_list_site_actions';

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
	 * @param string[] $actions An array of action links to be displayed. Default 'Edit', 'View'.
	 * @param int $userblog_id The site ID.
	 */
	abstract public function execute( $actions, $userblog_id );
}
