<?php
/**
 * WPAddTrashedSuffixToTrashedPostsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether or not to add a `__trashed` suffix to trashed posts that match the name of the updated post.
 *
 * @since 5.4.0
 */
abstract class WPAddTrashedSuffixToTrashedPostsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'add_trashed_suffix_to_trashed_posts';

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
	 * @param bool $add_trashed_suffix Whether to attempt to add the suffix.
	 * @param string $post_name The name of the post being updated.
	 * @param int $post_id Post ID.
	 */
	abstract public function execute( $add_trashed_suffix, $post_name, $post_id );
}
