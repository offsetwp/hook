<?php
/**
 * WPNewSiteEmailAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the content of the email sent to the Multisite network administrator when a new site is created.
 *
 * @since 5.6.0
 */
abstract class WPNewSiteEmailAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'new_site_email';

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
	 * @param array $new_site_email Used to build wp_mail().
	 * @param \WP_Site $site Site object of the new site.
	 * @param \WP_User $user User object of the administrator of the new site.
	 */
	abstract public function execute( $new_site_email, $site, $user );
}
