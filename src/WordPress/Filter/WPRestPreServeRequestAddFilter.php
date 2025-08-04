<?php
/**
 * WPRestPreServeRequestAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the REST API request has already been served.
 *
 * @since 4.4.0
 */
abstract class WPRestPreServeRequestAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_pre_serve_request';

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
	 * @param bool $served Whether the request has already been served. Default false.
	 * @param \WP_HTTP_Response $result Result to send to the client. Usually a <code>WP_REST_Response</code>.
	 * @param \WP_REST_Request $request Request used to generate the response.
	 * @param \WP_REST_Server $server Server instance.
	 */
	abstract public function execute( $served, $result, $request, $server );
}
