<?php
/**
 * WPUpdateTermParentAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the term parent.
 *
 * @since 3.1.0
 */
abstract class WPUpdateTermParentAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_update_term_parent';

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
	 * @param int $parent_term ID of the parent term.
	 * @param int $term_id Term ID.
	 * @param string $taxonomy Taxonomy slug.
	 * @param array $parsed_args An array of potentially altered update arguments for the given term.
	 * @param array $args Arguments passed to wp_update_term().
	 */
	abstract public function execute( $parent_term, $term_id, $taxonomy, $parsed_args, $args );
}
