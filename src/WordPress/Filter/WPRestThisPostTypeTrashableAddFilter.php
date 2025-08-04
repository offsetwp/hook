<?php
/**
 * WPRestThisPostTypeTrashableAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether a post is trashable.
 *
 * @since 4.7.0
 */
abstract class WPRestThisPostTypeTrashableAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_{$this->post_type}_trashable';

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
	 * @param bool $supports_trash Whether the post type support trashing.
	 * @param \WP_Post $post The Post object being considered for trashing support.
	 */
	abstract public function execute( $supports_trash, $post );
}
