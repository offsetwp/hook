<?php
/**
 * WPDisplayPostStatesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the default post display states used in the posts list table.
 *
 * @since 2.8.0
 * @since 3.6.0 Added the `$post` parameter.
 * @since 5.5.0 Also applied in the Customizer context. If any admin functions are used within the filter, their existence should be checked with `function_exists()` before being used.
 */
abstract class WPDisplayPostStatesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'display_post_states';

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
	 * @param string[] $post_states An array of post display states.
	 * @param \WP_Post $post The current post object.
	 */
	abstract public function execute( $post_states, $post );
}
