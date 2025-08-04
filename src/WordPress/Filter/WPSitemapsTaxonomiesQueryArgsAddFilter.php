<?php
/**
 * WPSitemapsTaxonomiesQueryArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the taxonomy terms query arguments.
 *
 * @see WP_Term_Query for a full list of arguments
 *
 * @since 5.5.0
 */
abstract class WPSitemapsTaxonomiesQueryArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_sitemaps_taxonomies_query_args';

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
	 * @param array $args Array of WP_Term_Query arguments.
	 * @param string $taxonomy Taxonomy name.
	 */
	abstract public function execute( $args, $taxonomy );
}
