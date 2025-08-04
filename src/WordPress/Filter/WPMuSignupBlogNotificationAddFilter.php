<?php
/**
 * WPMuSignupBlogNotificationAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to bypass the new site email notification.
 *
 * @since MU ( 3.0.0 ) MU ( 3.0.0 )
 */
abstract class WPMuSignupBlogNotificationAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wpmu_signup_blog_notification';

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
	public int $hook_accepted_args = 7;


	/**
	 * The hook execution method
	 *
	 * @param string|false $domain Site domain, or false to prevent the email from sending.
	 * @param string $path Site path.
	 * @param string $title Site title.
	 * @param string $user_login User login name.
	 * @param string $user_email User email address.
	 * @param string $key Activation key created in wpmu_signup_blog().
	 * @param array $meta Signup meta data. By default, contains the requested privacy setting and lang_id.
	 */
	abstract public function execute( $domain, $path, $title, $user_login, $user_email, $key, $meta );
}
