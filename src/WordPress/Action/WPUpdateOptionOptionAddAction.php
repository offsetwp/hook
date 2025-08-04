<?php
/**
 * WPUpdateOptionOptionAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after the value of a specific option has been successfully updated.
 *
 * @since 2.0.1
 * @since 4.4.0 The `$option` parameter was added.
 */
abstract class WPUpdateOptionOptionAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'update_option_{$option}';

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
	 * @param mixed $old_value The old option value.
	 * @param mixed $value The new option value.
	 * @param string $option Option name.
	 */
	abstract public function execute( $old_value, $value, $option );
}
