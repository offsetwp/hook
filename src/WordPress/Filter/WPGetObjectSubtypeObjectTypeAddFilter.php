<?php
/**
 * WPGetObjectSubtypeObjectTypeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the object subtype identifier for a non-standard object type.
 *
 * @since 4.9.8
 */
abstract class WPGetObjectSubtypeObjectTypeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_object_subtype_{$object_type}';

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
	 * @param string $object_subtype Empty string to override.
	 * @param int $object_id ID of the object to get the subtype for.
	 */
	abstract public function execute( $object_subtype, $object_id );
}
