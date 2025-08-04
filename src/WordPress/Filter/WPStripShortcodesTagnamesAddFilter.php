<?php
/**
 * WPStripShortcodesTagnamesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of shortcode tags to remove from the content.
 *
 * @since 4.7.0
 */
abstract class WPStripShortcodesTagnamesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'strip_shortcodes_tagnames';

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
	 * @param array $tags_to_remove Array of shortcode tags to remove.
	 * @param string $content Content shortcodes are being removed from.
	 */
	abstract public function execute( $tags_to_remove, $content );
}
