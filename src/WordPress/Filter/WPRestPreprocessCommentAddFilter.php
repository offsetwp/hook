<?php
/**
 * WPRestPreprocessCommentAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a comment added via the REST API after it is prepared for insertion into the database.
 *
 * @since 4.7.0
 */
abstract class WPRestPreprocessCommentAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_preprocess_comment';

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
	 * @param array $prepared_comment The prepared comment data for <code>wp_insert_comment</code>.
	 * @param \WP_REST_Request $request The current request.
	 */
	abstract public function execute( $prepared_comment, $request );
}
