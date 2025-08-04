<?php
/**
 * WPDisplayMediaStatesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the default media display states for items in the Media list table.
 *
 * @since 3.2.0
 * @since 4.8.0 Added the `$post` parameter.
 */
abstract class WPDisplayMediaStatesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'display_media_states';

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
	 * @param string[] $media_states An array of media states. Default 'Header Image', 'Background Image', 'Site Icon', 'Logo'.
	 * @param \WP_Post $post The current attachment object.
	 */
	abstract public function execute( $media_states, $post );
}
