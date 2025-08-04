<?php
/**
 * WPShowPostLockedDialogAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to show the post locked dialog.
 *
 * @since 3.6.0
 */
abstract class WPShowPostLockedDialogAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'show_post_locked_dialog';

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
	 * @param bool $display Whether to display the dialog. Default true.
	 * @param \WP_Post $post Post object.
	 * @param \WP_User $user The user with the lock for the post.
	 */
	abstract public function execute( $display, $post, $user );
}
