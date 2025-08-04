<?php
/**
 * WPDynamicSidebarBeforeAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires before widgets are rendered in a dynamic sidebar.
 *
 * @since 3.9.0
 */
abstract class WPDynamicSidebarBeforeAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'dynamic_sidebar_before';

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
	 * @param int|string $index Index, name, or ID of the dynamic sidebar.
	 * @param bool $has_widgets Whether the sidebar is populated with widgets. Default true.
	 */
	abstract public function execute( $index, $has_widgets );
}
