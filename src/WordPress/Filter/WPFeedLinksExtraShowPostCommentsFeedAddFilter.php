<?php
/**
 * WPFeedLinksExtraShowPostCommentsFeedAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to display the post comments feed link.
 *
 * @since 6.1.0
 */
abstract class WPFeedLinksExtraShowPostCommentsFeedAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'feed_links_extra_show_post_comments_feed';

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
	 * @param bool $show_comments_feed Whether to display the post comments feed link. Defaults to the {@see 'feed_links_show_comments_feed'} filter result.
	 */
	abstract public function execute( $show_comments_feed );
}
