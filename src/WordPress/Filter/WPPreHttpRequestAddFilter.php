<?php
/**
 * WPPreHttpRequestAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the preemptive return value of an HTTP request.
 *
 * @since 2.9.0
 */
abstract class WPPreHttpRequestAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_http_request';

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
	 * @param false|array|\WP_Error $response A preemptive return value of an HTTP request. Default false.
	 * @param array $parsed_args HTTP request arguments.
	 * @param string $url The request URL.
	 */
	abstract public function execute( $response, $parsed_args, $url );
}
