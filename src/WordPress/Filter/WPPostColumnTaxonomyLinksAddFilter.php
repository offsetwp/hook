<?php
/**
 * WPPostColumnTaxonomyLinksAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the links in `$taxonomy` column of edit.php.
 *
 * @since 5.2.0
 */
abstract class WPPostColumnTaxonomyLinksAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'post_column_taxonomy_links';

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
	 * @param string[] $term_links Array of term editing links.
	 * @param string $taxonomy Taxonomy name.
	 * @param \WP_Term[] $terms Array of term objects appearing in the post row.
	 */
	abstract public function execute( $term_links, $taxonomy, $terms );
}
