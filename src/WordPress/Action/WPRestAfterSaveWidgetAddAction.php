<?php
/**
 * WPRestAfterSaveWidgetAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a widget is created or updated via the REST API.
 *
 * @since 5.8.0
 */
abstract class WPRestAfterSaveWidgetAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_after_save_widget';

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
	 * @param string $id ID of the widget being saved.
	 * @param string $sidebar_id ID of the sidebar containing the widget being saved.
	 * @param \WP_REST_Request $request Request object.
	 * @param bool $creating True when creating a widget, false when updating.
	 */
	abstract public function execute( $id, $sidebar_id, $request, $creating );
}
