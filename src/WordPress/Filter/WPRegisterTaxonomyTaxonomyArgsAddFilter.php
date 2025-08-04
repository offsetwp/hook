<?php
/**
 * WPRegisterTaxonomyTaxonomyArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the arguments for registering a specific taxonomy.
 *
 * @since 6.0.0
 */
abstract class WPRegisterTaxonomyTaxonomyArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'register_{$taxonomy}_taxonomy_args';

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
	 * @param array $args Array of arguments for registering a taxonomy. See the register_taxonomy() function for accepted arguments.
	 * @param string $taxonomy Taxonomy key.
	 * @param string[] $object_type Array of names of object types for the taxonomy.
	 */
	abstract public function execute( $args, $taxonomy, $object_type );
}
