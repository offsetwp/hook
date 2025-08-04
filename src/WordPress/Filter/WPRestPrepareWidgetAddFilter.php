<?php
/**
 * WPRestPrepareWidgetAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the REST API response for a widget.
 *
 * @since 5.8.0
 */
abstract class WPRestPrepareWidgetAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_prepare_widget';

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
	 * @param \WP_REST_Response|\WP_Error $response The response object, or WP_Error object on failure.
	 * @param array $widget The registered widget data.
	 * @param \WP_REST_Request $request Request used to generate the response.
	 */
	abstract public function execute( $response, $widget, $request );
}
