<?php
/**
 * WPUserErasureFulfillmentEmailSubjectAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the subject of the email sent when an erasure request is completed.
 *
 * @since 5.8.0
 */
abstract class WPUserErasureFulfillmentEmailSubjectAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'user_erasure_fulfillment_email_subject';

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
	 * @param string $subject The email subject.
	 * @param string $sitename The name of the site.
	 * @param array $email_data Data relating to the account action email.
	 */
	abstract public function execute( $subject, $sitename, $email_data );
}
