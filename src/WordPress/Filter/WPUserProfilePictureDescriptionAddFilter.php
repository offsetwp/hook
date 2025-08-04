<?php
/**
 * WPUserProfilePictureDescriptionAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the user profile picture description displayed under the Gravatar.
 *
 * @since 4.4.0
 * @since 4.7.0 Added the `$profile_user` parameter.
 */
abstract class WPUserProfilePictureDescriptionAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'user_profile_picture_description';

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
	 * @param string $description The description that will be printed.
	 * @param \WP_User $profile_user The current WP_User object.
	 */
	abstract public function execute( $description, $profile_user );
}
