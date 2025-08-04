<?php
/**
 * WPUpdateNavMenuItemAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a navigation menu item has been updated.
 *
 * @since 3.0.0
 *
 * @see wp_update_nav_menu_item()
 */
abstract class WPUpdateNavMenuItemAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_update_nav_menu_item';

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
	 * @param int $menu_id ID of the updated menu.
	 * @param int $menu_item_db_id ID of the updated menu item.
	 * @param array $args An array of arguments used to update a menu item.
	 */
	abstract public function execute( $menu_id, $menu_item_db_id, $args );
}
