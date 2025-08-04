<?php
/**
 * WPRestPreInsertCommentAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a comment before it is inserted via the REST API.
 *
 * @since 4.7.0
 * @since 4.8.0 `$prepared_comment` can now be a WP_Error to short-circuit insertion.
 */
abstract class WPRestPreInsertCommentAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_pre_insert_comment';

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
	 * @param array|\WP_Error $prepared_comment The prepared comment data for wp_insert_comment().
	 * @param \WP_REST_Request $request Request used to insert the comment.
	 */
	abstract public function execute( $prepared_comment, $request );
}
