<?php
/**
 * WPRemoveUserFromBlogAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires before a user is removed from a site.
 *
 * @since MU ( 3.0.0 ) MU ( 3.0.0 )
 * @since 5.4.0 Added the `$reassign` parameter.
 */
abstract class WPRemoveUserFromBlogAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'remove_user_from_blog';

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
	 * @param int $user_id ID of the user being removed.
	 * @param int $blog_id ID of the blog the user is being removed from.
	 * @param int $reassign ID of the user to whom to reassign posts.
	 */
	abstract public function execute( $user_id, $blog_id, $reassign );
}
