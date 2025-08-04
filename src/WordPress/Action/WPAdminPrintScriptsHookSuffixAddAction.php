<?php
/**
 * WPAdminPrintScriptsHookSuffixAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when scripts are printed for a specific admin page based on $hook_suffix.
 *
 * @since 2.1.0
 */
abstract class WPAdminPrintScriptsHookSuffixAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'admin_print_scripts-{$hook_suffix}';

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
	public int $hook_accepted_args = 0;


	/**
	 * The hook execution method
	 */
	abstract public function execute();
}
