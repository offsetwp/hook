<?php
/**
 * WPUpdateCommentDataAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the comment data immediately before it is updated in the database.
 *
 * @since 4.7.0
 * @since 5.5.0 Returning a WP_Error value from the filter will short-circuit comment update and allow skipping further processing.
 */
abstract class WPUpdateCommentDataAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_update_comment_data';

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
	 * @param array|\WP_Error $data The new, processed comment data, or WP_Error.
	 * @param array $comment The old, unslashed comment data.
	 * @param array $commentarr The new, raw comment data.
	 */
	abstract public function execute( $data, $comment, $commentarr );
}
