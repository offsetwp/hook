<?php
/**
 * WPWpPutPostRevisionAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires once a revision has been saved.
 *
 * @since 2.6.0
 * @since 6.4.0 The post_id parameter was added.
 */
abstract class WPWpPutPostRevisionAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = '_wp_put_post_revision';

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
	 * @param int $revision_id Post revision ID.
	 * @param int $post_id Post ID.
	 */
	abstract public function execute( $revision_id, $post_id );
}
