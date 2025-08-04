<?php
/**
 * WPDynamicSidebarHasWidgetsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether a sidebar has widgets.
 *
 * @since 3.9.0
 */
abstract class WPDynamicSidebarHasWidgetsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'dynamic_sidebar_has_widgets';

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
	 * @param bool $did_one Whether at least one widget was rendered in the sidebar. Default false.
	 * @param int|string $index Index, name, or ID of the dynamic sidebar.
	 */
	abstract public function execute( $did_one, $index );
}
