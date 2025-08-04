<?php
/**
 * WPAjaxTermSearchResultsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the Ajax term search results.
 *
 * @since 6.1.0
 */
abstract class WPAjaxTermSearchResultsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'ajax_term_search_results';

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
	 * @param string[] $results Array of term names.
	 * @param \WP_Taxonomy $taxonomy_object The taxonomy object.
	 * @param string $search The search term.
	 */
	abstract public function execute( $results, $taxonomy_object, $search );
}
