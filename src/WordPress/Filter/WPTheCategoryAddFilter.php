<?php
/**
 * WPTheCategoryAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the category or list of categories.
 *
 * @since 1.2.0
 */
abstract class WPTheCategoryAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'the_category';

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
	 * @param string $thelist List of categories for the current post.
	 * @param string $separator Separator used between the categories.
	 * @param string $parents How to display the category parents. Accepts 'multiple', 'single', or empty.
	 */
	abstract public function execute( $thelist, $separator, $parents );
}
