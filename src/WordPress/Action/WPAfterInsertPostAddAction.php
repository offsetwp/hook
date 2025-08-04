<?php
/**
 * WPAfterInsertPostAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires once a post, its terms and meta data has been saved.
 *
 * @since 5.6.0
 */
abstract class WPAfterInsertPostAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_after_insert_post';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param int $post_id Post ID.
	 * @param \WP_Post $post Post object.
	 * @param bool $update Whether this is an existing post being updated.
	 * @param null|\WP_Post $post_before Null for new posts, the WP_Post object prior to the update for updated posts.
	 */
	abstract public function execute( $post_id, $post, $update, $post_before );
}
