<?php
/**
 * WPHttpRequestRejectUnsafeUrlsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to pass URLs through wp_http_validate_url() in an HTTP request.
 *
 * @since 3.6.0
 * @since 5.1.0 The `$url` parameter was added.
 */
abstract class WPHttpRequestRejectUnsafeUrlsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'http_request_reject_unsafe_urls';

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
	 * @param bool $pass_url Whether to pass URLs through wp_http_validate_url(). Default false.
	 * @param string $url The request URL.
	 */
	abstract public function execute( $pass_url, $url );
}
