<?php
/**
 * WPNavMenuItemArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the arguments for a single nav menu item.
 *
 * @since 4.4.0
 */
abstract class WPNavMenuItemArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'nav_menu_item_args';

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
	 * @param \stdClass $args An object of wp_nav_menu() arguments.
	 * @param \WP_Post $menu_item Menu item data object.
	 * @param int $depth Depth of menu item. Used for padding.
	 */
	abstract public function execute( $args, $menu_item, $depth );
}
