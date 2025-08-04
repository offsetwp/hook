<?php
/**
 * WPDoParseRequestAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to parse the request.
 *
 * @since 3.5.0
 */
abstract class WPDoParseRequestAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'do_parse_request';

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
	 * @param bool $bool Whether or not to parse the request. Default true.
	 * @param \WP $wp Current WordPress environment instance.
	 * @param array|string $extra_query_vars Extra passed query variables.
	 */
	abstract public function execute( $bool, $wp, $extra_query_vars );
}
