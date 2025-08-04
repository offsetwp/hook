<?php
/**
 * WPRestPreEchoResponseAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the REST API response.
 *
 * @since 4.8.1
 */
abstract class WPRestPreEchoResponseAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_pre_echo_response';

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
	 * @param array $result Response data to send to the client.
	 * @param \WP_REST_Server $server Server instance.
	 * @param \WP_REST_Request $request Request used to generate the response.
	 */
	abstract public function execute( $result, $server, $request );
}
