<?php
/**
 * WPQuickEditCustomBoxAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires once for each column in Quick Edit mode.
 *
 * @since 2.7.0
 */
abstract class WPQuickEditCustomBoxAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'quick_edit_custom_box';

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
	 * @param string $column_name Name of the column to edit.
	 * @param string $post_type The post type slug, or current screen name if this is a taxonomy list table.
	 * @param string $taxonomy The taxonomy name, if any.
	 */
	abstract public function execute( $column_name, $post_type, $taxonomy );
}
