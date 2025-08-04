<?php
/**
 * WPGetCommentLinkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the returned single comment permalink.
 *
 * @since 2.8.0
 * @since 4.4.0 Added the `$cpage` parameter.
 *
 * @see get_page_of_comment()
 */
abstract class WPGetCommentLinkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_comment_link';

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
	 * @param string $comment_link The comment permalink with '#comment-$id' appended.
	 * @param \WP_Comment $comment The current comment object.
	 * @param array $args An array of arguments to override the defaults.
	 * @param int $cpage The calculated 'cpage' value.
	 */
	abstract public function execute( $comment_link, $comment, $args, $cpage );
}
