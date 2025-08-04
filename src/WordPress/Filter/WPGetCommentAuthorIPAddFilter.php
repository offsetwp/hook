<?php
/**
 * WPGetCommentAuthorIPAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the comment author's returned IP address.
 *
 * @since 1.5.0
 * @since 4.1.0 The `$comment_id` and `$comment` parameters were added.
 */
abstract class WPGetCommentAuthorIPAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_comment_author_IP';

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
	 * @param string $comment_author_ip The comment author's IP address, or an empty string if it's not available.
	 * @param string $comment_id The comment ID as a numeric string.
	 * @param \WP_Comment $comment The comment object.
	 */
	abstract public function execute( $comment_author_ip, $comment_id, $comment );
}
