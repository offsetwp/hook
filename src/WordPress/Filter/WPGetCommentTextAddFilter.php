<?php
/**
 * WPGetCommentTextAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the text of a comment.
 *
 * @since 1.5.0
 *
 * @see Walker_Comment::comment()
 */
abstract class WPGetCommentTextAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_comment_text';

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
	 * @param string $comment_text Text of the comment.
	 * @param \WP_Comment $comment The comment object.
	 * @param array $args An array of arguments.
	 */
	abstract public function execute( $comment_text, $comment, $args );
}
