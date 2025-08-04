<?php
/**
 * WPRenderBlockAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the content of a single block.
 *
 * @since 5.0.0
 * @since 5.9.0 The `$instance` parameter was added.
 */
abstract class WPRenderBlockAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'render_block';

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
	 * @param string $block_content The block content.
	 * @param array $block The full block, including name and attributes.
	 * @param \WP_Block $instance The block instance.
	 */
	abstract public function execute( $block_content, $block, $instance );
}
