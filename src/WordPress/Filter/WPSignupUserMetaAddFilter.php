<?php
/**
 * WPSignupUserMetaAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the metadata for a user signup.
 *
 * @since 4.8.0
 */
abstract class WPSignupUserMetaAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'signup_user_meta';

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
	 * @param array $meta Signup meta data. Default empty array.
	 * @param string $user The user's requested login name.
	 * @param string $user_email The user's email address.
	 * @param string $key The user's activation key.
	 */
	abstract public function execute( $meta, $user, $user_email, $key );
}
