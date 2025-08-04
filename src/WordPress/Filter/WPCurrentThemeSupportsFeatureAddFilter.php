<?php
/**
 * WPCurrentThemeSupportsFeatureAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the active theme supports a specific feature.
 *
 * @since 3.4.0
 */
abstract class WPCurrentThemeSupportsFeatureAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'current_theme_supports-{$feature}';

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
	 * @param bool $supports Whether the active theme supports the given feature. Default true.
	 * @param array $args Array of arguments for the feature.
	 * @param string $feature The theme feature.
	 */
	abstract public function execute( $supports, $args, $feature );
}
