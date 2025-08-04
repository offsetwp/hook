<?php
/**
 * WPHandleNetworkBulkActionsScreenAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Fires when a custom bulk action should be handled.
 *
 * @since 4.7.0
 */
abstract class WPHandleNetworkBulkActionsScreenAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'handle_network_bulk_actions-{$screen}';

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
	 * @param string $redirect_url The redirect URL.
	 * @param string $action The action being taken.
	 * @param array $items The items to take the action on.
	 * @param int $site_id The site ID.
	 */
	abstract public function execute( $redirect_url, $action, $items, $site_id );
}
