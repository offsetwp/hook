<?php
/**
 * WPInsertPostParentAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the post parent -- used to check for and prevent hierarchy loops.
 *
 * @since 3.1.0
 */
abstract class WPInsertPostParentAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_insert_post_parent';

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
	 * @param int $post_parent Post parent ID.
	 * @param int $post_id Post ID.
	 * @param array $new_postarr Array of parsed post data.
	 * @param array $postarr Array of sanitized, but otherwise unmodified post data.
	 */
	abstract public function execute( $post_parent, $post_id, $new_postarr, $postarr );
}
