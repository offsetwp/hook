<?php
/**
 * WPGetDefaultCommentStatusAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the default comment status for the given post type.
 *
 * @since 4.3.0
 */
abstract class WPGetDefaultCommentStatusAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_default_comment_status';

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
	 * @param string $status Default status for the given post type, either 'open' or 'closed'.
	 * @param string $post_type Post type. Default is <code>post</code>.
	 * @param string $comment_type Type of comment. Default is <code>comment</code>.
	 */
	abstract public function execute( $status, $post_type, $comment_type );
}
