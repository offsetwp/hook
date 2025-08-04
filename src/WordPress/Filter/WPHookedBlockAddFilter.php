<?php
/**
 * WPHookedBlockAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the parsed block array for a given hooked block.
 *
 * @since 6.5.0
 */
abstract class WPHookedBlockAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'hooked_block';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param array|null $parsed_hooked_block The parsed block array for the given hooked block type, or null to suppress the block.
	 * @param string $hooked_block_type The hooked block type name.
	 * @param string $relative_position The relative position of the hooked block.
	 * @param array $parsed_anchor_block The anchor block, in parsed block array format.
	 * @param \WP_Block_Template|\WP_Post|array $context The block template, template part, post object, or pattern that the anchor block belongs to.
	 */
	abstract public function execute(
		$parsed_hooked_block,
		$hooked_block_type,
		$relative_position,
		$parsed_anchor_block,
		$context,
	);
}
