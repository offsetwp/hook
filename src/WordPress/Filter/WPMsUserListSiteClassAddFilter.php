<?php
/**
 * WPMsUserListSiteClassAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the span class for a site listing on the multisite user list table.
 *
 * @since 5.2.0
 */
abstract class WPMsUserListSiteClassAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'ms_user_list_site_class';

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
	 * @param string[] $site_classes Array of class names used within the span tag. Default "site-#" with the site's network ID.
	 * @param int $site_id Site ID.
	 * @param int $network_id Network ID.
	 * @param \WP_User $user WP_User object.
	 */
	abstract public function execute( $site_classes, $site_id, $network_id, $user );
}
