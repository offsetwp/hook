<?php
/**
 * WPThemeActionLinksStylesheetAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the action links of a specific theme in the Multisite themes list table.
 *
 * @since 3.1.0
 */
abstract class WPThemeActionLinksStylesheetAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'theme_action_links_{$stylesheet}';

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
	public int $hook_accepted_args = 3;


	/**
	 * The hook execution method
	 *
	 * @param string[] $actions An array of action links.
	 * @param \WP_Theme $theme The current WP_Theme object.
	 * @param string $context Status of the theme, one of 'all', 'enabled', or 'disabled'.
	 */
	abstract public function execute( $actions, $theme, $context );
}
