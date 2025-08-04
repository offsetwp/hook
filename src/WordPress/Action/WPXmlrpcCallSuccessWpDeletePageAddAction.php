<?php
/**
 * WPXmlrpcCallSuccessWpDeletePageAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a page has been successfully deleted via XML-RPC.
 *
 * @since 3.4.0
 */
abstract class WPXmlrpcCallSuccessWpDeletePageAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'xmlrpc_call_success_wp_deletePage';

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
	 * @param int $page_id ID of the deleted page.
	 * @param array $args An array of arguments to delete the page.
	 */
	abstract public function execute( $page_id, $args );
}
