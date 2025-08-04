<?php
/**
 * WPGetAdjacentPostWhereAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the WHERE clause in the SQL for an adjacent post query.
 *
 * @since 2.5.0
 * @since 4.4.0 Added the `$taxonomy` and `$post` parameters.
 */
abstract class WPGetAdjacentPostWhereAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_{$adjacent}_post_where';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param string $where The <code>WHERE</code> clause in the SQL.
	 * @param bool $in_same_term Whether post should be in the same taxonomy term.
	 * @param int[]|string $excluded_terms Array of excluded term IDs. Empty string if none were provided.
	 * @param string $taxonomy Taxonomy. Used to identify the term used when <code>$in_same_term</code> is true.
	 * @param \WP_Post $post WP_Post object.
	 */
	abstract public function execute( $where, $in_same_term, $excluded_terms, $taxonomy, $post );
}
