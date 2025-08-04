<?php
/**
 * WPRestDeleteCommentAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a comment is deleted via the REST API.
 *
 * @since 4.7.0
 */
abstract class WPRestDeleteCommentAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_delete_comment';

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
	 * @param \WP_Comment $comment The deleted comment data.
	 * @param \WP_REST_Response $response The response returned from the API.
	 * @param \WP_REST_Request $request The request sent to the API.
	 */
	abstract public function execute( $comment, $response, $request );
}
