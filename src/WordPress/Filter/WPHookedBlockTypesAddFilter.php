<?php
/**
 * WPHookedBlockTypesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of hooked block types for a given anchor block type and relative position.
 *
 * @since 6.4.0
 */
abstract class WPHookedBlockTypesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'hooked_block_types';

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
	 * @param string[] $hooked_block_types The list of hooked block types.
	 * @param string $relative_position The relative position of the hooked blocks. Can be one of 'before', 'after', 'first_child', or 'last_child'.
	 * @param string $anchor_block_type The anchor block type.
	 * @param \WP_Block_Template|\WP_Post|array $context The block template, template part, post object, or pattern that the anchor block belongs to.
	 */
	abstract public function execute( $hooked_block_types, $relative_position, $anchor_block_type, $context );
}
