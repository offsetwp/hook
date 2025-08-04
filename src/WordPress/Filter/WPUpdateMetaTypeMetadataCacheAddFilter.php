<?php
/**
 * WPUpdateMetaTypeMetadataCacheAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Short-circuits updating the metadata cache of a specific type.
 *
 * @since 5.0.0
 */
abstract class WPUpdateMetaTypeMetadataCacheAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'update_{$meta_type}_metadata_cache';

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
	 * @param mixed $check Whether to allow updating the meta cache of the given type.
	 * @param int[] $object_ids Array of object IDs to update the meta cache for.
	 */
	abstract public function execute( $check, $object_ids );
}
