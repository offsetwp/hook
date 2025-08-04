<?php
/**
 * WPImageMemoryLimitAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the memory limit allocated for image manipulation.
 *
 * @since 3.5.0
 * @since 4.6.0 The default now takes the original `memory_limit` into account.
 */
abstract class WPImageMemoryLimitAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'image_memory_limit';

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
	 * @param int|string $filtered_limit Maximum memory limit to allocate for image processing. Default <code>WP_MAX_MEMORY_LIMIT</code> or the original php.ini <code>memory_limit</code>, whichever is higher. Accepts an integer ( bytes ), or a shorthand string notation, such as '256M'.
	 */
	abstract public function execute( $filtered_limit );
}
