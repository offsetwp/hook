<?php
/**
 * WPRestPrepareUrlDetailsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the URL data for the response.
 *
 * @since 5.9.0
 */
abstract class WPRestPrepareUrlDetailsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_prepare_url_details';

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
	 * @param \WP_REST_Response $response The response object.
	 * @param string $url The requested URL.
	 * @param \WP_REST_Request $request Request object.
	 * @param string $remote_url_response HTTP response body from the remote URL.
	 */
	abstract public function execute( $response, $url, $request, $remote_url_response );
}
