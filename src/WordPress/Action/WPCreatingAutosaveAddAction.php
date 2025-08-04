<?php
/**
 * WPCreatingAutosaveAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires before an autosave is stored.
 *
 * @since 4.1.0
 * @since 6.4.0 The `$is_update` parameter was added to indicate if the autosave is being updated or was newly created.
 */
abstract class WPCreatingAutosaveAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_creating_autosave';

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
	 * @param array $new_autosave Post array - the autosave that is about to be saved.
	 * @param bool $is_update Whether this is an existing autosave.
	 */
	abstract public function execute( $new_autosave, $is_update );
}
