<?php
/**
 * WPQueryLoopBlockQueryVarsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the arguments which will be passed to `WP_Query` for the Query Loop Block.
 *
 * @since 6.1.0
 */
abstract class WPQueryLoopBlockQueryVarsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'query_loop_block_query_vars';

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
	 * @param array $query Array containing parameters for <code>WP_Query</code> as parsed by the block context.
	 * @param \WP_Block $block Block instance.
	 * @param int $page Current query's page.
	 */
	abstract public function execute( $query, $block, $page );
}
