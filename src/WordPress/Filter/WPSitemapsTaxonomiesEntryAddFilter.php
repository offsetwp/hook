<?php
/**
 * WPSitemapsTaxonomiesEntryAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the sitemap entry for an individual term.
 *
 * @since 5.5.0
 * @since 6.0.0 Added `$term` argument containing the term object.
 */
abstract class WPSitemapsTaxonomiesEntryAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_sitemaps_taxonomies_entry';

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
	 * @param array $sitemap_entry Sitemap entry for the term.
	 * @param int $term_id Term ID.
	 * @param string $taxonomy Taxonomy name.
	 * @param \WP_Term $term Term object.
	 */
	abstract public function execute( $sitemap_entry, $term_id, $taxonomy, $term );
}
