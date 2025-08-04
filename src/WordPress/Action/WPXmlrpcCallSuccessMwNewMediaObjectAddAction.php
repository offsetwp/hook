<?php
/**
 * WPXmlrpcCallSuccessMwNewMediaObjectAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a new attachment has been added via the XML-RPC MovableType API.
 *
 * @since 3.4.0
 */
abstract class WPXmlrpcCallSuccessMwNewMediaObjectAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'xmlrpc_call_success_mw_newMediaObject';

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
	 * @param int $attachment_id ID of the new attachment.
	 * @param array $args An array of arguments to add the attachment.
	 */
	abstract public function execute( $attachment_id, $args );
}
