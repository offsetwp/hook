<?php
/**
 * WPAllowedHttpOriginAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Changes the allowed HTTP origin result.
 *
 * @since 3.4.0
 */
abstract class WPAllowedHttpOriginAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'allowed_http_origin';

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
	 * @param string $origin Origin URL if allowed, empty string if not.
	 * @param string $origin_arg Original origin string passed into is_allowed_http_origin function.
	 */
	abstract public function execute( $origin, $origin_arg );
}
