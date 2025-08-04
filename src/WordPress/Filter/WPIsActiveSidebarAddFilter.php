<?php
/**
 * WPIsActiveSidebarAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether a dynamic sidebar is considered "active".
 *
 * @since 3.9.0
 */
abstract class WPIsActiveSidebarAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'is_active_sidebar';

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
	 * @param bool $is_active_sidebar Whether or not the sidebar should be considered "active". In other words, whether the sidebar contains any widgets.
	 * @param int|string $index Index, name, or ID of the dynamic sidebar.
	 */
	abstract public function execute( $is_active_sidebar, $index );
}
