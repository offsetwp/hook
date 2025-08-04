<?php
/**
 * WPRestRequestBeforeCallbacksAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the response before executing any REST API callbacks.
 *
 * @since 4.7.0
 */
abstract class WPRestRequestBeforeCallbacksAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_request_before_callbacks';

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
	 * @param \WP_REST_Response|\WP_HTTP_Response|\WP_Error|mixed $response Result to send to the client. Usually a WP_REST_Response or WP_Error.
	 * @param array $handler Route handler used for the request.
	 * @param \WP_REST_Request $request Request used to generate the response.
	 */
	abstract public function execute( $response, $handler, $request );
}
