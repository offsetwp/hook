<?php
/**
 * WPCustomizeNavMenuAvailableItemsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the available menu items.
 *
 * @since 4.3.0
 */
abstract class WPCustomizeNavMenuAvailableItemsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_nav_menu_available_items';

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
	 * @param array $items The array of menu items.
	 * @param string $object_type The object type.
	 * @param string $object_name The object name.
	 * @param int $page The current page number.
	 */
	abstract public function execute( $items, $object_type, $object_name, $page );
}
