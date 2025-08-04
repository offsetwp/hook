<?php
/**
 * WPTheCategoryListAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the categories before building the category list.
 *
 * @since 4.4.0
 */
abstract class WPTheCategoryListAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'the_category_list';

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
	 * @param \WP_Term[] $categories An array of the post's categories.
	 * @param int|false $post_id ID of the post to retrieve categories for. When <code>false</code>, defaults to the current post in the loop.
	 */
	abstract public function execute( $categories, $post_id );
}
