<?php
/**
 * WPInstalledEmailAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the contents of the email sent to the site administrator when WordPress is installed.
 *
 * @since 5.6.0
 */
abstract class WPInstalledEmailAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_installed_email';

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
	 * @param array $installed_email Used to build wp_mail().
	 * @param \WP_User $user The site administrator user object.
	 * @param string $blog_title The site title.
	 * @param string $blog_url The site URL.
	 * @param string $password The site administrator's password. Note that a placeholder message is usually passed instead of the user's actual password.
	 */
	abstract public function execute( $installed_email, $user, $blog_title, $blog_url, $password );
}
