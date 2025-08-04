<?php
/**
 * WPGetObjectTermsArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters arguments for retrieving object terms.
 *
 * @since 4.9.0
 */
abstract class WPGetObjectTermsArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_get_object_terms_args';

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
	 * @param array $args An array of arguments for retrieving terms for the given object( s ). See {@see \wp_get_object_terms()} for details.
	 * @param int[] $object_ids Array of object IDs.
	 * @param string[] $taxonomies Array of taxonomy names to retrieve terms from.
	 */
	abstract public function execute( $args, $object_ids, $taxonomies );
}
