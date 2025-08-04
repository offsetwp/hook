<?php
/**
 * WPNavMenuItemIdAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the ID attribute applied to a menu item's list item element.
 *
 * @since 3.0.1
 * @since 4.1.0 The `$depth` parameter was added.
 */
abstract class WPNavMenuItemIdAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'nav_menu_item_id';

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
	 * @param string $menu_item_id The ID attribute applied to the menu item's <code>&lt;li&gt;</code> element.
	 * @param \WP_Post $menu_item The current menu item.
	 * @param \stdClass $args An object of wp_nav_menu() arguments.
	 * @param int $depth Depth of menu item. Used for padding.
	 */
	abstract public function execute( $menu_item_id, $menu_item, $args, $depth );
}
