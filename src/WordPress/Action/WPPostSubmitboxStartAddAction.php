<?php
/**
 * WPPostSubmitboxStartAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires at the beginning of the publishing actions section of the Publish meta box.
 *
 * @since 2.7.0
 * @since 4.9.0 Added the `$post` parameter.
 */
abstract class WPPostSubmitboxStartAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'post_submitbox_start';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param \WP_Post|null $post WP_Post object for the current post on Edit Post screen, null on Edit Link screen.
	 */
	abstract public function execute( $post );
}
