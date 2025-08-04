<?php
/**
 * WPUserHasCapAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Dynamically filter a user's capabilities.
 *
 * @since 2.0.0
 * @since 3.7.0 Added the `$user` parameter.
 */
abstract class WPUserHasCapAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'user_has_cap';

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
	 * @param bool[] $allcaps Array of key/value pairs where keys represent a capability name and boolean values represent whether the user has that capability.
	 * @param string[] $caps Required primitive capabilities for the requested capability.
	 * @param array $args Arguments that accompany the requested capability check.
	 * @param \WP_User $user The user object.
	 */
	abstract public function execute( $allcaps, $caps, $args, $user );
}
