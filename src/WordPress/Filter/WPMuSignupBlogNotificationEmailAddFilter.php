<?php
/**
 * WPMuSignupBlogNotificationEmailAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the message content of the new blog notification email.
 *
 * @since MU ( 3.0.0 ) MU ( 3.0.0 )
 */
abstract class WPMuSignupBlogNotificationEmailAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wpmu_signup_blog_notification_email';

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
	public int $hook_accepted_args = 8;


	/**
	 * The hook execution method
	 *
	 * @param string $content Content of the notification email.
	 * @param string $domain Site domain.
	 * @param string $path Site path.
	 * @param string $title Site title.
	 * @param string $user_login User login name.
	 * @param string $user_email User email address.
	 * @param string $key Activation key created in wpmu_signup_blog().
	 * @param array $meta Signup meta data. By default, contains the requested privacy setting and lang_id.
	 */
	abstract public function execute( $content, $domain, $path, $title, $user_login, $user_email, $key, $meta );
}
