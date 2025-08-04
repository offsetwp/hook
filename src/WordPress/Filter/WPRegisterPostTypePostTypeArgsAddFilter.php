<?php
/**
 * WPRegisterPostTypePostTypeArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the arguments for registering a specific post type.
 *
 * @since 6.0.0
 * @since 6.4.0 Added `late_route_registration`, `autosave_rest_controller_class` and `revisions_rest_controller_class` arguments.
 */
abstract class WPRegisterPostTypePostTypeArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'register_{$post_type}_post_type_args';

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
	 * @param array $args Array of arguments for registering a post type. See the register_post_type() function for accepted arguments.
	 * @param string $post_type Post type key.
	 */
	abstract public function execute( $args, $post_type );
}
