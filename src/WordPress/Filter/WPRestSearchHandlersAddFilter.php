<?php
/**
 * WPRestSearchHandlersAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the search handlers to use in the REST search controller.
 *
 * @since 5.0.0
 */
abstract class WPRestSearchHandlersAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_rest_search_handlers';

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
	 * @param array $search_handlers List of search handlers to use in the controller. Each search handler instance must extend the <code>WP_REST_Search_Handler</code> class. Default is only a handler for posts.
	 */
	abstract public function execute( $search_handlers );
}
