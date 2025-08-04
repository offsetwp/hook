<?php
/**
 * WPGetTheAuthorFieldAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the value of the requested user metadata.
 *
 * @since 2.8.0
 * @since 4.3.0 The `$original_user_id` parameter was added.
 */
abstract class WPGetTheAuthorFieldAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_the_author_{$field}';

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
	public int $hook_accepted_args = 3;


	/**
	 * The hook execution method
	 *
	 * @param string $value The value of the metadata.
	 * @param int $user_id The user ID for the value.
	 * @param int|false $original_user_id The original user ID, as passed to the function.
	 */
	abstract public function execute( $value, $user_id, $original_user_id );
}
