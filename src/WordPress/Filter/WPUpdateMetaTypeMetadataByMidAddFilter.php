<?php
/**
 * WPUpdateMetaTypeMetadataByMidAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Short-circuits updating metadata of a specific type by meta ID.
 *
 * @since 5.0.0
 */
abstract class WPUpdateMetaTypeMetadataByMidAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'update_{$meta_type}_metadata_by_mid';

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
	 * @param null|bool $check Whether to allow updating metadata for the given type.
	 * @param int $meta_id Meta ID.
	 * @param mixed $meta_value Meta value. Must be serializable if non-scalar.
	 * @param string|false $meta_key Meta key, if provided.
	 */
	abstract public function execute( $check, $meta_id, $meta_value, $meta_key );
}
