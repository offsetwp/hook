<?php
/**
 * WPSiteAdminEmailChangeEmailAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the contents of the email notification sent when the site admin email address is changed.
 *
 * @since 4.9.0
 */
abstract class WPSiteAdminEmailChangeEmailAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'site_admin_email_change_email';

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
	 * @param array $email_change_email Used to build wp_mail().
	 * @param string $old_email The old site admin email address.
	 * @param string $new_email The new site admin email address.
	 */
	abstract public function execute( $email_change_email, $old_email, $new_email );
}
