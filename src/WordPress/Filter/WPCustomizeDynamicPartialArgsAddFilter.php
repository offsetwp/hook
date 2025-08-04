<?php
/**
 * WPCustomizeDynamicPartialArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a dynamic partial's constructor arguments.
 *
 * @since 4.5.0
 */
abstract class WPCustomizeDynamicPartialArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_dynamic_partial_args';

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
	 * @param false|array $partial_args The arguments to the WP_Customize_Partial constructor.
	 * @param string $partial_id ID for dynamic partial.
	 */
	abstract public function execute( $partial_args, $partial_id );
}
