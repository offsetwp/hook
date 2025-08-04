<?php
/**
 * WPRestAfterInsertNavMenuItemAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a single menu item is completely created or updated via the REST API.
 *
 * @since 5.9.0
 */
abstract class WPRestAfterInsertNavMenuItemAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_after_insert_nav_menu_item';

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
	 * @param object $nav_menu_item Inserted or updated menu item object.
	 * @param \WP_REST_Request $request Request object.
	 * @param bool $creating True when creating a menu item, false when updating.
	 */
	abstract public function execute( $nav_menu_item, $request, $creating );
}
