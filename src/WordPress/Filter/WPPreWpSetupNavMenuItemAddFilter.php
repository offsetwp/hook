<?php
/**
 * WPPreWpSetupNavMenuItemAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to short-circuit the wp_setup_nav_menu_item() output.
 *
 * @since 6.3.0
 */
abstract class WPPreWpSetupNavMenuItemAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_wp_setup_nav_menu_item';

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
	 * @param object|null $modified_menu_item Modified menu item. Default null.
	 * @param object $menu_item The menu item to modify.
	 */
	abstract public function execute( $modified_menu_item, $menu_item );
}
