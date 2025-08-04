<?php
/**
 * WPTermExistsDefaultQueryArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters default query arguments for checking if a term exists.
 *
 * @since 6.0.0
 */
abstract class WPTermExistsDefaultQueryArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'term_exists_default_query_args';

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
	 * @param array $defaults An array of arguments passed to get_terms().
	 * @param int|string $term The term to check. Accepts term ID, slug, or name.
	 * @param string $taxonomy The taxonomy name to use. An empty string indicates the search is against all taxonomies.
	 * @param int|null $parent_term ID of parent term under which to confine the exists search. Null indicates the search is unconfined.
	 */
	abstract public function execute( $defaults, $term, $taxonomy, $parent_term );
}
