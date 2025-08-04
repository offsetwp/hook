<?php
/**
 * WPContextMemoryLimitAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the memory limit allocated for an arbitrary context.
 *
 * @since 4.6.0
 */
abstract class WPContextMemoryLimitAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = '{$context}_memory_limit';

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
	 * @param int|string $filtered_limit Maximum memory limit to allocate for this context. Default WP_MAX_MEMORY_LIMIT<code>or the original php.ini</code>memory_limit`, whichever is higher. Accepts an integer ( bytes ), or a shorthand string notation, such as '256M'.
	 */
	abstract public function execute( $filtered_limit );
}
