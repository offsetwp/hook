<?php
/**
 * WPXmlrpcCallAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after the XML-RPC user has been authenticated but before the rest of the method logic begins.
 *
 * @since 2.5.0
 * @since 5.7.0 Added the `$args` and `$server` parameters.
 */
abstract class WPXmlrpcCallAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'xmlrpc_call';

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
	 * @param string $name The method name.
	 * @param array|string $args The escaped arguments passed to the method.
	 * @param \wp_xmlrpc_server $server The XML-RPC server instance.
	 */
	abstract public function execute( $name, $args, $server );
}
