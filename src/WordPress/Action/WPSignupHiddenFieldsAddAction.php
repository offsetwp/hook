<?php
/**
 * WPSignupHiddenFieldsAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when hidden sign-up form fields output when creating another site or user.
 *
 * @since MU ( 3.0.0 ) MU ( 3.0.0 )
 */
abstract class WPSignupHiddenFieldsAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'signup_hidden_fields';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param string $context A string describing the steps of the sign-up process. The value can be 'create-another-site', 'validate-user', or 'validate-site'.
	 */
	abstract public function execute( $context );
}
