<?php
/**
 * WPDeleteWidgetAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately after a widget has been marked for deletion.
 *
 * @since 4.4.0
 */
abstract class WPDeleteWidgetAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'delete_widget';

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
	 * @param string $widget_id ID of the widget marked for deletion.
	 * @param string $sidebar_id ID of the sidebar the widget was deleted from.
	 * @param string $id_base ID base for the widget.
	 */
	abstract public function execute( $widget_id, $sidebar_id, $id_base );
}
