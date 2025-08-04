<?php
/**
 * WPSpeculationRulesHrefExcludePathsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the paths for which speculative loading should be disabled.
 *
 * @since 6.8.0
 */
abstract class WPSpeculationRulesHrefExcludePathsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_speculation_rules_href_exclude_paths';

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
	 * @param string[] $href_exclude_paths Additional path patterns to disable speculative loading for.
	 * @param string $mode Mode used to apply speculative loading. Either 'prefetch' or 'prerender'.
	 */
	abstract public function execute( $href_exclude_paths, $mode );
}
