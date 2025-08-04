<?php
/**
 * WPWalkerNavMenuStartElAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a menu item's starting output.
 *
 * @since 3.0.0
 */
abstract class WPWalkerNavMenuStartElAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'walker_nav_menu_start_el';

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
	 * @param string $item_output The menu item's starting HTML output.
	 * @param \WP_Post $menu_item Menu item data object.
	 * @param int $depth Depth of menu item. Used for padding.
	 * @param \stdClass $args An object of wp_nav_menu() arguments.
	 */
	abstract public function execute( $item_output, $menu_item, $depth, $args );
}
