<?php
/**
 * WPSanitizeObjectTypeMetaMetaKeyForObjectSubtypeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the sanitization of a specific meta key of a specific meta type and subtype.
 *
 * @since 4.9.8
 */
abstract class WPSanitizeObjectTypeMetaMetaKeyForObjectSubtypeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'sanitize_{$object_type}_meta_{$meta_key}_for_{$object_subtype}';

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
	 * @param mixed $meta_value Metadata value to sanitize.
	 * @param string $meta_key Metadata key.
	 * @param string $object_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user', or any other object type with an associated meta table.
	 * @param string $object_subtype Object subtype.
	 */
	abstract public function execute( $meta_value, $meta_key, $object_type, $object_subtype );
}
