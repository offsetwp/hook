<?php
/**
 * WPCreateApplicationPasswordAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when an application password is created.
 *
 * @since 5.6.0
 * @since 6.8.0 The hashed password value now uses wp_fast_hash() instead of phpass.
 */
abstract class WPCreateApplicationPasswordAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_create_application_password';

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
	 * @param int $user_id The user ID.
	 * @param array $new_item The details about the created password.
	 * @param string $new_password The generated application password in plain text.
	 * @param array $args Arguments used to create the application password.
	 */
	abstract public function execute( $user_id, $new_item, $new_password, $args );
}
