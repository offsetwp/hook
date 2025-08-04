<?php
/**
 * WPRestDeleteWidgetAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a widget is deleted via the REST API.
 *
 * @since 5.8.0
 */
abstract class WPRestDeleteWidgetAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_delete_widget';

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
	 * @param string $widget_id ID of the widget marked for deletion.
	 * @param string $sidebar_id ID of the sidebar the widget was deleted from.
	 * @param \WP_REST_Response|\WP_Error $response The response data, or WP_Error object on failure.
	 * @param \WP_REST_Request $request The request sent to the API.
	 */
	abstract public function execute( $widget_id, $sidebar_id, $response, $request );
}
