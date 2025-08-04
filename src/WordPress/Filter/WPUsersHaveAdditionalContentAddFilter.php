<?php
/**
 * WPUsersHaveAdditionalContentAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the users being deleted have additional content associated with them outside of the `post_author` and `link_owner` relationships.
 *
 * @since 5.2.0
 */
abstract class WPUsersHaveAdditionalContentAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'users_have_additional_content';

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
	 * @param bool $users_have_additional_content Whether the users have additional content. Default false.
	 * @param int[] $user_ids Array of IDs for users being deleted.
	 */
	abstract public function execute( $users_have_additional_content, $user_ids );
}
