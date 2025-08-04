<?php
/**
 * WPGetMetaTypeMetadataAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Short-circuits the return value of a meta field.
 *
 * @since 3.1.0
 * @since 5.5.0 Added the `$meta_type` parameter.
 */
abstract class WPGetMetaTypeMetadataAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_{$meta_type}_metadata';

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
	 * @param mixed $value The value to return, either a single metadata value or an array of values depending on the value of <code>$single</code>. Default null.
	 * @param int $object_id ID of the object metadata is for.
	 * @param string $meta_key Metadata key.
	 * @param bool $single Whether to return only the first value of the specified <code>$meta_key</code>.
	 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user', or any other object type with an associated meta table.
	 */
	abstract public function execute( $value, $object_id, $meta_key, $single, $meta_type );
}
