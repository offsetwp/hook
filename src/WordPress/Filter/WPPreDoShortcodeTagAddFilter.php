<?php
/**
 * WPPreDoShortcodeTagAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to call a shortcode callback.
 *
 * @since 4.7.0
 * @since 6.5.0 The `$attr` parameter is always an array.
 */
abstract class WPPreDoShortcodeTagAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_do_shortcode_tag';

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
	 * @param false|string $output Short-circuit return value. Either false or the value to replace the shortcode with.
	 * @param string $tag Shortcode name.
	 * @param array $attr Shortcode attributes array, can be empty if the original arguments string cannot be parsed.
	 * @param array $m Regular expression match array.
	 */
	abstract public function execute( $output, $tag, $attr, $m );
}
