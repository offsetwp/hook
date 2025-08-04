<?php
/**
 * WPCustomizeNavMenuAvailableItemTypesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the available menu item types.
 *
 * @since 4.3.0
 * @since 4.7.0 Each array item now includes a `$type_label` in addition to `$title`, `$type`, and `$object`.
 */
abstract class WPCustomizeNavMenuAvailableItemTypesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_nav_menu_available_item_types';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param array $item_types Navigation menu item types.
	 */
	abstract public function execute( $item_types );
}
