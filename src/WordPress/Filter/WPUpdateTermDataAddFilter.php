<?php
/**
 * WPUpdateTermDataAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters term data before it is updated in the database.
 *
 * @since 4.7.0
 */
abstract class WPUpdateTermDataAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_update_term_data';

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
	 * @param array $data Term data to be updated.
	 * @param int $term_id Term ID.
	 * @param string $taxonomy Taxonomy slug.
	 * @param array $args Arguments passed to wp_update_term().
	 */
	abstract public function execute( $data, $term_id, $taxonomy, $args );
}
