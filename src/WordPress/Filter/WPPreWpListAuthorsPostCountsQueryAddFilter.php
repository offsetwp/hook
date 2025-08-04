<?php
/**
 * WPPreWpListAuthorsPostCountsQueryAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to short-circuit performing the query for author post counts.
 *
 * @since 6.1.0
 */
abstract class WPPreWpListAuthorsPostCountsQueryAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_wp_list_authors_post_counts_query';

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
	 * @param int[]|false $post_counts Array of post counts, keyed by author ID.
	 * @param array $parsed_args The arguments passed to wp_list_authors() combined with the defaults.
	 */
	abstract public function execute( $post_counts, $parsed_args );
}
