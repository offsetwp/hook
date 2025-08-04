<?php
/**
 * WPUpdateWelcomeEmailAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the content of the welcome email sent to the site administrator after site activation.
 *
 * @since MU ( 3.0.0 ) MU ( 3.0.0 )
 */
abstract class WPUpdateWelcomeEmailAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'update_welcome_email';

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
	public int $hook_accepted_args = 6;


	/**
	 * The hook execution method
	 *
	 * @param string $welcome_email Message body of the email.
	 * @param int $blog_id Site ID.
	 * @param int $user_id User ID of the site administrator.
	 * @param string $password User password, or "N/A" if the user account is not new.
	 * @param string $title Site title.
	 * @param array $meta Signup meta data. By default, contains the requested privacy setting and lang_id.
	 */
	abstract public function execute( $welcome_email, $blog_id, $user_id, $password, $title, $meta );
}
