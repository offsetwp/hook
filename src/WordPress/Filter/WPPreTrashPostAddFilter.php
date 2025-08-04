<?php
/**
 * WPPreTrashPostAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether a post trashing should take place.
 *
 * @since 4.9.0
 * @since 6.3.0 Added the `$previous_status` parameter.
 */
abstract class WPPreTrashPostAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_trash_post';

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
	 * @param bool|null $trash Whether to go forward with trashing.
	 * @param \WP_Post $post Post object.
	 * @param string $previous_status The status of the post about to be trashed.
	 */
	abstract public function execute( $trash, $post, $previous_status );
}
