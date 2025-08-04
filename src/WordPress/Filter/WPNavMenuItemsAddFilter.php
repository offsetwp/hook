<?php
/**
 * WPNavMenuItemsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the HTML list content for navigation menus.
 *
 * @since 3.0.0
 *
 * @see wp_nav_menu()
 */
abstract class WPNavMenuItemsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_nav_menu_items';

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
	 * @param string $items The HTML list content for the menu items.
	 * @param \stdClass $args An object containing wp_nav_menu() arguments.
	 */
	abstract public function execute( $items, $args );
}
