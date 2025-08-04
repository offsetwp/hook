<?php
/**
 * WPGetAncestorsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a given object's ancestors.
 *
 * @since 3.1.0
 * @since 4.1.1 Introduced the `$resource_type` parameter.
 */
abstract class WPGetAncestorsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_ancestors';

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
	 * @param int[] $ancestors An array of IDs of object ancestors.
	 * @param int $object_id Object ID.
	 * @param string $object_type Type of object.
	 * @param string $resource_type Type of resource $object_type is.
	 */
	abstract public function execute( $ancestors, $object_id, $object_type, $resource_type );
}
