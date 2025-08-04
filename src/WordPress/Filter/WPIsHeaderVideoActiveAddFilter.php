<?php
/**
 * WPIsHeaderVideoActiveAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the custom header video is eligible to show on the current page.
 *
 * @since 4.7.0
 */
abstract class WPIsHeaderVideoActiveAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'is_header_video_active';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param bool $show_video Whether the custom header video should be shown. Returns the value of the theme setting for the <code>custom-header</code>'s <code>video-active-callback</code>. If no callback is set, the default value is that of <code>is_front_page()</code>.
	 */
	abstract public function execute( $show_video );
}
