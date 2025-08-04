<?php
/**
 * WPRestThisPostTypeQueryAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters WP_Query arguments when querying posts via the REST API.
 *
 * @since 4.7.0
 * @since 5.7.0 Moved after the `tax_query` query arg is generated.
 *
 * @link  https://developer.wordpress.org/reference/classes/wp_query/
 */
abstract class WPRestThisPostTypeQueryAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_{$this->post_type}_query';

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
	 * @param array $args Array of arguments for WP_Query.
	 * @param \WP_REST_Request $request The REST API request.
	 */
	abstract public function execute( $args, $request );
}
