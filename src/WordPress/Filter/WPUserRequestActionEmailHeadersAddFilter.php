<?php
/**
 * WPUserRequestActionEmailHeadersAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the headers of the email sent when an account action is attempted.
 *
 * @since 5.4.0
 */
abstract class WPUserRequestActionEmailHeadersAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'user_request_action_email_headers';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param string|array $headers The email headers.
	 * @param string $subject The email subject.
	 * @param string $content The email content.
	 * @param int $request_id The request ID.
	 * @param array $email_data Data relating to the account action email.
	 */
	abstract public function execute( $headers, $subject, $content, $request_id, $email_data );
}
