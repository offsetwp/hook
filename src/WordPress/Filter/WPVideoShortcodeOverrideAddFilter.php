<?php
/**
 * WPVideoShortcodeOverrideAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the default video shortcode output.
 *
 * @since 3.6.0
 *
 * @see wp_video_shortcode()
 */
abstract class WPVideoShortcodeOverrideAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_video_shortcode_override';

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
	 * @param string $html Empty variable to be replaced with shortcode markup.
	 * @param array $attr Attributes of the shortcode. See {@see \wp_video_shortcode()}.
	 * @param string $content Video shortcode content.
	 * @param int $instance Unique numeric ID of this video shortcode instance.
	 */
	abstract public function execute( $html, $attr, $content, $instance );
}
