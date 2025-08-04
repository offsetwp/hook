<?php
/**
 * WPCommentAuthorLinkRelAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the rel attributes of the comment author's link.
 *
 * @since 6.2.0
 */
abstract class WPCommentAuthorLinkRelAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'comment_author_link_rel';

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
	 * @param string[] $rel_parts An array of strings representing the rel tags which will be joined into the anchor's rel attribute.
	 * @param \WP_Comment $comment The comment object.
	 */
	abstract public function execute( $rel_parts, $comment );
}
