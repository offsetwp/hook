<?php
/**
 * WPPrivacyAdditionalUserProfileDataAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the user's profile data for the privacy exporter.
 *
 * @since 5.4.0
 */
abstract class WPPrivacyAdditionalUserProfileDataAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_privacy_additional_user_profile_data';

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
	 * @param array $additional_user_profile_data An array of name-value pairs of additional user data items. Default empty array.
	 * @param \WP_User $user The user whose data is being exported.
	 * @param string[] $reserved_names An array of reserved names. Any item in <code>$additional_user_data</code> that uses one of these for its <code>name</code> will not be included in the export.
	 */
	abstract public function execute( $additional_user_profile_data, $user, $reserved_names );
}
