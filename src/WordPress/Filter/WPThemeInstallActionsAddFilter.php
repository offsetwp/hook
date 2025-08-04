<?php
/**
 * WPThemeInstallActionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the install action links for a theme in the Install Themes list table.
 *
 * @since 3.4.0
 */
abstract class WPThemeInstallActionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'theme_install_actions';

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
	 * @param string[] $actions An array of theme action links. Defaults are links to Install Now, Preview, and Details.
	 * @param \stdClass $theme An object that contains theme data returned by the WordPress.org API.
	 */
	abstract public function execute( $actions, $theme );
}
