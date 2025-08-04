<?php
/**
 * WPAddUserToBlogAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately after a user is added to a site.
 *
 * @since MU ( 3.0.0 ) MU ( 3.0.0 )
 */
abstract class WPAddUserToBlogAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'add_user_to_blog';

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
	 * @param int $user_id User ID.
	 * @param string $role User role.
	 * @param int $blog_id Blog ID.
	 */
	abstract public function execute( $user_id, $role, $blog_id );
}
