<?php
/**
 * WPRestrictManagePostsAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires before the Filter button on the Posts and Pages list tables.
 *
 * @since 2.1.0
 * @since 4.4.0 The `$post_type` parameter was added.
 * @since 4.6.0 The `$which` parameter was added.
 */
abstract class WPRestrictManagePostsAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'restrict_manage_posts';

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
	public int $hook_accepted_args = 2;


	/**
	 * The hook execution method
	 *
	 * @param string $post_type The post type slug.
	 * @param string $which The location of the extra table nav markup: 'top' or 'bottom' for WP_Posts_List_Table, 'bar' for WP_Media_List_Table.
	 */
	abstract public function execute( $post_type, $which );
}
