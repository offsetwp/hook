<?php
/**
 * WPVerifyNonceFailedAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when nonce verification fails.
 *
 * @since 4.4.0
 */
abstract class WPVerifyNonceFailedAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_verify_nonce_failed';

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
	 * @param string $nonce The invalid nonce.
	 * @param string|int $action The nonce action.
	 * @param \WP_User $user The current user object.
	 * @param string $token The user's session token.
	 */
	abstract public function execute( $nonce, $action, $user, $token );
}
