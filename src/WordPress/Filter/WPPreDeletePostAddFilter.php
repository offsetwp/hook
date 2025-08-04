<?php
/**
 * WPPreDeletePostAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether a post deletion should take place.
 *
 * @since 4.4.0
 */
abstract class WPPreDeletePostAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_delete_post';

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
	 * @param \WP_Post|false|null $delete Whether to go forward with deletion.
	 * @param \WP_Post $post Post object.
	 * @param bool $force_delete Whether to bypass the Trash.
	 */
	abstract public function execute( $delete, $post, $force_delete );
}
