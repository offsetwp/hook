<?php
/**
 * WPRenderBlockDataAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the block being rendered in render_block(), before it's processed.
 *
 * @since 5.1.0
 * @since 5.9.0 The `$parent_block` parameter was added.
 */
abstract class WPRenderBlockDataAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'render_block_data';

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
	 * @param array $parsed_block An associative array of the block being rendered. See WP_Block_Parser_Block.
	 * @param array $source_block An un-modified copy of <code>$parsed_block</code>, as it appeared in the source content. See WP_Block_Parser_Block.
	 * @param \WP_Block|null $parent_block If this is a nested block, a reference to the parent block.
	 */
	abstract public function execute( $parsed_block, $source_block, $parent_block );
}
