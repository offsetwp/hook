<?php
/**
 * WPHttpAcceptEncodingAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the allowed encoding types.
 *
 * @since 3.6.0
 */
abstract class WPHttpAcceptEncodingAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_http_accept_encoding';

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
	 * @param string[] $type Array of what encoding types to accept and their priority values.
	 * @param string $url URL of the HTTP request.
	 * @param array $args HTTP request arguments.
	 */
	abstract public function execute( $type, $url, $args );
}
