<?php
/**
 * WPGetTermsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the found terms.
 *
 * @since 2.3.0
 * @since 4.6.0 Added the `$term_query` parameter.
 */
abstract class WPGetTermsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_terms';

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
	 * @param array $terms Array of found terms.
	 * @param array|null $taxonomies An array of taxonomies if known.
	 * @param array $args An array of get_terms() arguments.
	 * @param \WP_Term_Query $term_query The WP_Term_Query object.
	 */
	abstract public function execute( $terms, $taxonomies, $args, $term_query );
}
