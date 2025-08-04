<?php
/**
 * WPMuActivateBlogAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately after a site is activated.
 *
 * @since MU ( 3.0.0 ) MU ( 3.0.0 )
 */
abstract class WPMuActivateBlogAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wpmu_activate_blog';

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
	 * @param int $blog_id Blog ID.
	 * @param int $user_id User ID.
	 * @param string $password User password.
	 * @param string $signup_title Site title.
	 * @param array $meta Signup meta data. By default, contains the requested privacy setting and lang_id.
	 */
	abstract public function execute( $blog_id, $user_id, $password, $signup_title, $meta );
}
