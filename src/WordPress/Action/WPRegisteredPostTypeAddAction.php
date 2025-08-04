<?php
/**
 * WPRegisteredPostTypeAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a post type is registered.
 *
 * @since 3.3.0
 * @since 4.6.0 Converted the `$post_type` parameter to accept a `WP_Post_Type` object.
 */
abstract class WPRegisteredPostTypeAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'registered_post_type';

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
	 * @param string $post_type Post type.
	 * @param \WP_Post_Type $post_type_object Arguments used to register the post type.
	 */
	abstract public function execute( $post_type, $post_type_object );
}
