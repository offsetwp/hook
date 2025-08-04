<?php
/**
 * WPPreTrackbackPostAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires before the trackback is added to a post.
 *
 * @since 4.7.0
 */
abstract class WPPreTrackbackPostAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_trackback_post';

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
	public int $hook_accepted_args = 6;


	/**
	 * The hook execution method
	 *
	 * @param int $post_id Post ID related to the trackback.
	 * @param string $trackback_url Trackback URL.
	 * @param string $charset Character set.
	 * @param string $title Trackback title.
	 * @param string $excerpt Trackback excerpt.
	 * @param string $blog_name Site name.
	 */
	abstract public function execute( $post_id, $trackback_url, $charset, $title, $excerpt, $blog_name );
}
