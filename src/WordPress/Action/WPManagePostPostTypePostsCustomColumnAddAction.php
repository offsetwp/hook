<?php
/**
 * WPManagePostPostTypePostsCustomColumnAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires for each custom column of a specific post type in the Posts list table.
 *
 * @since 3.1.0
 */
abstract class WPManagePostPostTypePostsCustomColumnAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'manage_{$post->post_type}_posts_custom_column';

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
	 * @param string $column_name The name of the column to display.
	 * @param int $post_id The current post ID.
	 */
	abstract public function execute( $column_name, $post_id );
}
