<?php
/**
 * WPRestDispatchRequestAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the REST API dispatch request result.
 *
 * @since 4.4.0
 * @since 4.5.0 Added `$route` and `$handler` parameters.
 */
abstract class WPRestDispatchRequestAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_dispatch_request';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param mixed $dispatch_result Dispatch result, will be used if not empty.
	 * @param \WP_REST_Request $request Request used to generate the response.
	 * @param string $route Route matched for the request.
	 * @param array $handler Route handler used for the request.
	 */
	abstract public function execute( $dispatch_result, $request, $route, $handler );
}
