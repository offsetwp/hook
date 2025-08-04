<?php
/**
 * WPVideoShortcodeClassAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the class attribute for the video shortcode output container.
 *
 * @since 3.6.0
 * @since 4.9.0 The `$atts` parameter was added.
 */
abstract class WPVideoShortcodeClassAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_video_shortcode_class';

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
	 * @param string $class CSS class or list of space-separated classes.
	 * @param array $atts Array of video shortcode attributes.
	 */
	abstract public function execute( $class, $atts );
}
