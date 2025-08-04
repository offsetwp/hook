<?php
/**
 * WPRestExposedCorsHeadersAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of response headers that are exposed to REST API CORS requests.
 *
 * @since 5.5.0
 * @since 6.3.0 The `$request` parameter was added.
 */
abstract class WPRestExposedCorsHeadersAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_exposed_cors_headers';

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
	 * @param string[] $expose_headers The list of response headers to expose.
	 * @param \WP_REST_Request $request The request in context.
	 */
	abstract public function execute( $expose_headers, $request );
}
