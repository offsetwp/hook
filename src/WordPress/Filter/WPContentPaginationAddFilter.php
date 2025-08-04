<?php
/**
 * WPContentPaginationAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the "pages" derived from splitting the post content.
 *
 * @since 4.4.0
 */
abstract class WPContentPaginationAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'content_pagination';

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
	 * @param string[] $pages Array of "pages" from the post content split by <code>&lt;!-- nextpage --&gt;</code> tags.
	 * @param \WP_Post $post Current post object.
	 */
	abstract public function execute( $pages, $post );
}
