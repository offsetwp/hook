<?php
/**
 * WPInsertTermDuplicateTermCheckAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the duplicate term check that takes place during term creation.
 *
 * @since 5.1.0
 */
abstract class WPInsertTermDuplicateTermCheckAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_insert_term_duplicate_term_check';

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
	 * @param object $duplicate_term Duplicate term row from terms table, if found.
	 * @param string $term Term being inserted.
	 * @param string $taxonomy Taxonomy name.
	 * @param array $args Arguments passed to wp_insert_term().
	 * @param int $tt_id term_taxonomy_id for the newly created term.
	 */
	abstract public function execute( $duplicate_term, $term, $taxonomy, $args, $tt_id );
}
