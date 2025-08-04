<?php
/**
 * WPPreInsertTermAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a term before it is sanitized and inserted into the database.
 *
 * @since 3.0.0
 * @since 6.1.0 The `$args` parameter was added.
 */
abstract class WPPreInsertTermAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_insert_term';

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
	 * @param string|\WP_Error $term The term name to add, or a WP_Error object if there's an error.
	 * @param string $taxonomy Taxonomy slug.
	 * @param array|string $args Array or query string of arguments passed to wp_insert_term().
	 */
	abstract public function execute( $term, $taxonomy, $args );
}
