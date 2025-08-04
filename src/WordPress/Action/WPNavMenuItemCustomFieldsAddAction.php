<?php
/**
 * WPNavMenuItemCustomFieldsAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires just before the move buttons of a nav menu item in the menu editor.
 *
 * @since 5.4.0
 */
abstract class WPNavMenuItemCustomFieldsAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_nav_menu_item_custom_fields';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param string $item_id Menu item ID as a numeric string.
	 * @param \WP_Post $menu_item Menu item data object.
	 * @param int $depth Depth of menu item. Used for padding.
	 * @param \stdClass|null $args An object of menu item arguments.
	 * @param int $current_object_id Nav menu ID.
	 */
	abstract public function execute( $item_id, $menu_item, $depth, $args, $current_object_id );
}
