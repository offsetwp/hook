<?php
/**
 * WPTermsClausesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the terms query SQL clauses.
 *
 * @since 3.1.0
 */
abstract class WPTermsClausesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'terms_clauses';

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
	 * @param array $clauses Associative array of the clauses for the query.
	 * @param string[] $taxonomies An array of taxonomy names.
	 * @param array $args An array of term query arguments.
	 */
	abstract public function execute( $clauses, $taxonomies, $args );
}
