<?php
/**
 * WPUpdateMetaTypeMetadataAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Short-circuits updating metadata of a specific type.
 *
 * @since 3.1.0
 */
abstract class WPUpdateMetaTypeMetadataAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'update_{$meta_type}_metadata';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param null|bool $check Whether to allow updating metadata for the given type.
	 * @param int $object_id ID of the object metadata is for.
	 * @param string $meta_key Metadata key.
	 * @param mixed $meta_value Metadata value. Must be serializable if non-scalar.
	 * @param mixed $prev_value Optional. Previous value to check before updating. If specified, only update existing metadata entries with this value. Otherwise, update all entries.
	 */
	abstract public function execute( $check, $object_id, $meta_key, $meta_value, $prev_value );
}
