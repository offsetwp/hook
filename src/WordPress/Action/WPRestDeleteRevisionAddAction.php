<?php
/**
 * WPRestDeleteRevisionAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a revision is deleted via the REST API.
 *
 * @since 4.7.0
 */
abstract class WPRestDeleteRevisionAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_delete_revision';

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
	 * @param \WP_Post|false|null $result The revision object ( if it was deleted or moved to the Trash successfully ) or false or null ( failure ). If the revision was moved to the Trash, $result represents its new state; if it was deleted, $result represents its state before deletion.
	 * @param \WP_REST_Request $request The request sent to the API.
	 */
	abstract public function execute( $result, $request );
}
