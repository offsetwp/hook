<?php
/**
 * WPPreWpGetLoadingOptimizationAttributesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to short-circuit loading optimization attributes.
 *
 * @since 6.4.0
 */
abstract class WPPreWpGetLoadingOptimizationAttributesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_wp_get_loading_optimization_attributes';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param array|false $loading_attrs False by default, or array of loading optimization attributes to short-circuit.
	 * @param string $tag_name The tag name.
	 * @param array $attr Array of the attributes for the tag.
	 * @param string $context Context for the element for which the loading optimization attribute is requested.
	 */
	abstract public function execute( $loading_attrs, $tag_name, $attr, $context );
}
