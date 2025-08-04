<?php
/**
 * WPRestMenuReadAccessAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the current user has read access to menu items via the REST API.
 *
 * @since 6.8.0
 */
abstract class WPRestMenuReadAccessAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_menu_read_access';

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
	 * @param bool $read_only_access Whether the current user has read access to menu items via the REST API.
	 * @param \WP_REST_Request $request Full details about the request.
	 * @param \WP_REST_Controller $controller The current instance of the controller.
	 */
	abstract public function execute( $read_only_access, $request, $controller );
}
