<?php
/**
 * WPPostPasswordRequiredAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether a post requires the user to supply a password.
 *
 * @since 4.7.0
 */
abstract class WPPostPasswordRequiredAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'post_password_required';

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
	 * @param bool $required Whether the user needs to supply a password. True if password has not been provided or is incorrect, false if password has been supplied or is not required.
	 * @param \WP_Post $post Post object.
	 */
	abstract public function execute( $required, $post );
}
