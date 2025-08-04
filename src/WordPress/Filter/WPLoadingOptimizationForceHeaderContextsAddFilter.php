<?php
/**
 * WPLoadingOptimizationForceHeaderContextsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the header-specific contexts.
 *
 * @since 6.4.0
 */
abstract class WPLoadingOptimizationForceHeaderContextsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_loading_optimization_force_header_contexts';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param array $default_header_enforced_contexts Map of contexts for which elements should be considered in the header of the page, as $context =&gt; $enabled pairs. The $enabled should always be true.
	 */
	abstract public function execute( $default_header_enforced_contexts );
}
