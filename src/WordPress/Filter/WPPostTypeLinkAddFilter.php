<?php
/**
 * WPPostTypeLinkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the permalink for a post of a custom post type.
 *
 * @since 3.0.0
 */
abstract class WPPostTypeLinkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'post_type_link';

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
	 * @param string $post_link The post's permalink.
	 * @param \WP_Post $post The post in question.
	 * @param bool $leavename Whether to keep the post name.
	 * @param bool $sample Is it a sample permalink.
	 */
	abstract public function execute( $post_link, $post, $leavename, $sample );
}
