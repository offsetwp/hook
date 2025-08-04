<?php
/**
 * WPCategoryCssClassAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of CSS classes to include with each category in the list.
 *
 * @since 4.2.0
 *
 * @see wp_list_categories()
 */
abstract class WPCategoryCssClassAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'category_css_class';

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
	 * @param string[] $css_classes An array of CSS classes to be applied to each list item.
	 * @param \WP_Term $category Category data object.
	 * @param int $depth Depth of page, used for padding.
	 * @param array $args An array of wp_list_categories() arguments.
	 */
	abstract public function execute( $css_classes, $category, $depth, $args );
}
