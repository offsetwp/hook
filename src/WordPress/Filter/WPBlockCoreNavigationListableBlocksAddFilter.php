<?php
/**
 * WPBlockCoreNavigationListableBlocksAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filter the list of blocks that need a list item wrapper.
 *
 * @since 6.5.0
 *
 * @return The list of blocks that need a list item wrapper.
 */
abstract class WPBlockCoreNavigationListableBlocksAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'block_core_navigation_listable_blocks';

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
	 * @param array $needs_list_item_wrapper The list of blocks that need a list item wrapper.
	 */
	abstract public function execute( $needs_list_item_wrapper );
}
