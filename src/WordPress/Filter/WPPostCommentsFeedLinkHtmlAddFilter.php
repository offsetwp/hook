<?php
/**
 * WPPostCommentsFeedLinkHtmlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the post comment feed link anchor tag.
 *
 * @since 2.8.0
 */
abstract class WPPostCommentsFeedLinkHtmlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'post_comments_feed_link_html';

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
	 * @param string $link The complete anchor tag for the comment feed link.
	 * @param int $post_id Post ID.
	 * @param string $feed The feed type. Possible values include 'rss2', 'atom', or an empty string for the default feed type.
	 */
	abstract public function execute( $link, $post_id, $feed );
}
