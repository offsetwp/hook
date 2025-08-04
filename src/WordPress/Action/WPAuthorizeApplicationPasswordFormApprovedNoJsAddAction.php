<?php
/**
 * WPAuthorizeApplicationPasswordFormApprovedNoJsAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires in the Authorize Application Password new password section in the no-JS version.
 *
 * @since 5.6.0
 * @since 5.6.1 Corrected action name and signature.
 */
abstract class WPAuthorizeApplicationPasswordFormApprovedNoJsAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_authorize_application_password_form_approved_no_js';

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
	 * @param string $new_password The newly generated application password.
	 * @param array $request The array of request data. All arguments are optional and may be empty.
	 * @param \WP_User $user The user authorizing the application.
	 */
	abstract public function execute( $new_password, $request, $user );
}
