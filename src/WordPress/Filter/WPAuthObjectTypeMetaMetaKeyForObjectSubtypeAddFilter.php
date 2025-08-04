<?php
/**
 * WPAuthObjectTypeMetaMetaKeyForObjectSubtypeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the user is allowed to edit a specific meta key of a specific object type and subtype.
 *
 * @since 4.9.8
 */
abstract class WPAuthObjectTypeMetaMetaKeyForObjectSubtypeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'auth_{$object_type}_meta_{$meta_key}_for_{$object_subtype}';

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
	public int $hook_accepted_args = 6;


	/**
	 * The hook execution method
	 *
	 * @param bool $allowed Whether the user can add the object meta. Default false.
	 * @param string $meta_key The meta key.
	 * @param int $object_id Object ID.
	 * @param int $user_id User ID.
	 * @param string $cap Capability name.
	 * @param string[] $caps Array of the user's capabilities.
	 */
	abstract public function execute( $allowed, $meta_key, $object_id, $user_id, $cap, $caps );
}
