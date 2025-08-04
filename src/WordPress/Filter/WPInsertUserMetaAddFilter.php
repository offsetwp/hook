<?php
/**
 * WPInsertUserMetaAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a user's meta values and keys immediately after the user is created or updated and before any user meta is inserted or updated.
 *
 * @since 4.4.0
 * @since 5.8.0 The `$userdata` parameter was added.
 */
abstract class WPInsertUserMetaAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'insert_user_meta';

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
	 * @param array $meta Default meta values and keys for the user.
	 * @param \WP_User $user User object.
	 * @param bool $update Whether the user is being updated rather than created.
	 * @param array $userdata The raw array of data passed to wp_insert_user().
	 */
	abstract public function execute( $meta, $user, $update, $userdata );
}
