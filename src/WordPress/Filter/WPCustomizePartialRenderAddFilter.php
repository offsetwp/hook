<?php
/**
 * WPCustomizePartialRenderAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters partial rendering.
 *
 * @since 4.5.0
 */
abstract class WPCustomizePartialRenderAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_partial_render';

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
	 * @param string|array|false $rendered The partial value. Default false.
	 * @param \WP_Customize_Partial $partial WP_Customize_Setting instance.
	 * @param array $container_context Optional array of context data associated with the target container.
	 */
	abstract public function execute( $rendered, $partial, $container_context );
}
