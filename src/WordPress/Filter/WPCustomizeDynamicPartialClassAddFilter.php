<?php
/**
 * WPCustomizeDynamicPartialClassAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the class used to construct partials.
 *
 * @since 4.5.0
 */
abstract class WPCustomizeDynamicPartialClassAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_dynamic_partial_class';

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
	 * @param string $partial_class WP_Customize_Partial or a subclass.
	 * @param string $partial_id ID for dynamic partial.
	 * @param array $partial_args The arguments to the WP_Customize_Partial constructor.
	 */
	abstract public function execute( $partial_class, $partial_id, $partial_args );
}
