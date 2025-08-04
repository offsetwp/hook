<?php
/**
 * WPAfterSignupSiteAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after site signup information has been written to the database.
 *
 * @since 4.4.0
 */
abstract class WPAfterSignupSiteAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'after_signup_site';

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
	 * @param string $domain The requested domain.
	 * @param string $path The requested path.
	 * @param string $title The requested site title.
	 * @param string $user The user's requested login name.
	 * @param string $user_email The user's email address.
	 * @param string $key The user's activation key.
	 * @param array $meta Signup meta data. By default, contains the requested privacy setting and lang_id.
	 */
	abstract public function execute( $domain, $path, $title, $user, $user_email, $key, $meta );
}
