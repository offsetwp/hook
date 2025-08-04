<?php
/**
 * WPHttpApiDebugAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after an HTTP API response is received and before the response is returned.
 *
 * @since 2.8.0
 */
abstract class WPHttpApiDebugAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'http_api_debug';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param array|\WP_Error $response HTTP response or WP_Error object.
	 * @param string $context Context under which the hook is fired.
	 * @param string $class HTTP transport used.
	 * @param array $parsed_args HTTP request arguments.
	 * @param string $url The request URL.
	 */
	abstract public function execute( $response, $context, $class, $parsed_args, $url );
}
