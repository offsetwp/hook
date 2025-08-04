<?php
/**
 * WPUpdatePostTermCountStatusesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the post statuses for updating the term count.
 *
 * @since 5.7.0
 */
abstract class WPUpdatePostTermCountStatusesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'update_post_term_count_statuses';

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
	 * @param string[] $post_statuses List of post statuses to include in the count. Default is 'publish'.
	 * @param \WP_Taxonomy $taxonomy Current taxonomy object.
	 */
	abstract public function execute( $post_statuses, $taxonomy );
}
