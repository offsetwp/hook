<?php
/**
 * WPRestEndpointsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the array of available REST API endpoints.
 *
 * @since 4.4.0
 */
abstract class WPRestEndpointsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_endpoints';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param array $endpoints The available endpoints. An array of matching regex patterns, each mapped to an array of callbacks for the endpoint. These take the format <code>'/path/regex' =&gt; array(  $callback, $bitmask  )</code> or `'/path/regex' =&gt; array(  array(  $callback, $bitmask  ).
	 */
	abstract public function execute( $endpoints );
}
