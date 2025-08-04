<?php
/**
 * WPTermSearchMinCharsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the minimum number of characters required to fire a tag search via Ajax.
 *
 * @since 4.0.0
 */
abstract class WPTermSearchMinCharsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'term_search_min_chars';

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
	 * @param int $characters The minimum number of characters required. Default 2.
	 * @param \WP_Taxonomy $taxonomy_object The taxonomy object.
	 * @param string $search The search term.
	 */
	abstract public function execute( $characters, $taxonomy_object, $search );
}
