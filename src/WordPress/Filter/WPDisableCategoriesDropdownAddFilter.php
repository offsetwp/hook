<?php
/**
 * WPDisableCategoriesDropdownAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to remove the 'Categories' drop-down from the post list table.
 *
 * @since 4.6.0
 */
abstract class WPDisableCategoriesDropdownAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'disable_categories_dropdown';

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
	 * @param bool $disable Whether to disable the categories drop-down. Default false.
	 * @param string $post_type Post type slug.
	 */
	abstract public function execute( $disable, $post_type );
}
