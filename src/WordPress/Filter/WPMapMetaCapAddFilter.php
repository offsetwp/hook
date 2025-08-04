<?php
/**
 * WPMapMetaCapAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the primitive capabilities required of the given user to satisfy the capability being checked.
 *
 * @since 2.8.0
 */
abstract class WPMapMetaCapAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'map_meta_cap';

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
	 * @param string[] $caps Primitive capabilities required of the user.
	 * @param string $cap Capability being checked.
	 * @param int $user_id The user ID.
	 * @param array $args Adds context to the capability check, typically starting with an object ID.
	 */
	abstract public function execute( $caps, $cap, $user_id, $args );
}
