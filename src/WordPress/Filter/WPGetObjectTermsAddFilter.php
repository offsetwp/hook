<?php
/**
 * WPGetObjectTermsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the terms for a given object or objects.
 *
 * @since 2.8.0
 */
abstract class WPGetObjectTermsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_get_object_terms';

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
	 * @param \WP_Term[]|int[]|string[]|string $terms Array of terms or a count thereof as a numeric string.
	 * @param string $object_ids Comma separated list of object IDs for which terms were retrieved.
	 * @param string $taxonomies SQL fragment of taxonomy names from which terms were retrieved.
	 * @param array $args Array of arguments for retrieving terms for the given object( s ). See wp_get_object_terms() for details.
	 */
	abstract public function execute( $terms, $object_ids, $taxonomies, $args );
}
