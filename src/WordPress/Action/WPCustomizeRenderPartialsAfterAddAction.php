<?php
/**
 * WPCustomizeRenderPartialsAfterAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately after partials are rendered.
 *
 * @since 4.5.0
 */
abstract class WPCustomizeRenderPartialsAfterAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_render_partials_after';

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
	 * @param \WP_Customize_Selective_Refresh $refresh Selective refresh component.
	 * @param array $partials Placements' context data for the partials rendered in the request. The array is keyed by partial ID, with each item being an array of the placements' context data.
	 */
	abstract public function execute( $refresh, $partials );
}
