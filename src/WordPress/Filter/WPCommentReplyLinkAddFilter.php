<?php
/**
 * WPCommentReplyLinkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the comment reply link.
 *
 * @since 2.7.0
 */
abstract class WPCommentReplyLinkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'comment_reply_link';

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
	 * @param string $comment_reply_link The HTML markup for the comment reply link.
	 * @param array $args An array of arguments overriding the defaults.
	 * @param \WP_Comment $comment The object of the comment being replied.
	 * @param \WP_Post $post The WP_Post object.
	 */
	abstract public function execute( $comment_reply_link, $args, $comment, $post );
}
