<?php
/**
 * WPPreHttpSendThroughProxyAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to preempt sending the request through the proxy.
 *
 * @since 3.5.0
 */
abstract class WPPreHttpSendThroughProxyAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_http_send_through_proxy';

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
	 * @param bool|null $override Whether to send the request through the proxy. Default null.
	 * @param string $uri URL of the request.
	 * @param array $check Associative array result of parsing the request URL with <code>parse_url()</code>.
	 * @param array $home Associative array result of parsing the site URL with <code>parse_url()</code>.
	 */
	abstract public function execute( $override, $uri, $check, $home );
}
