<?php
/**
 * WPCustomizeRenderPartialsResponseAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the response from rendering the partials.
 *
 * @since 4.5.0
 */
abstract class WPCustomizeRenderPartialsResponseAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_render_partials_response';

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
	 * @param array $response Response.
	 * @param \WP_Customize_Selective_Refresh $refresh Selective refresh component.
	 * @param array $partials Placements' context data for the partials rendered in the request. The array is keyed by partial ID, with each item being an array of the placements' context data.
	 */
	abstract public function execute( $response, $refresh, $partials );
}
