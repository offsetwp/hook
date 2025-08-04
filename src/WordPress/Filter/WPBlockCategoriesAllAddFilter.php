<?php
/**
 * WPBlockCategoriesAllAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the default array of categories for block types.
 *
 * @since 5.8.0
 */
abstract class WPBlockCategoriesAllAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'block_categories_all';

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
	 * @param array[] $block_categories Array of categories for block types.
	 * @param \WP_Block_Editor_Context $block_editor_context The current block editor context.
	 */
	abstract public function execute( $block_categories, $block_editor_context );
}
