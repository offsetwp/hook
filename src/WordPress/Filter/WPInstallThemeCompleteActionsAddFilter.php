<?php
/**
 * WPInstallThemeCompleteActionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of action links available following a single theme installation.
 *
 * @since 2.8.0
 */
abstract class WPInstallThemeCompleteActionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'install_theme_complete_actions';

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
	 * @param string[] $install_actions Array of theme action links.
	 * @param object $api Object containing WordPress.org API theme data.
	 * @param string $stylesheet Theme directory name.
	 * @param \WP_Theme $theme_info Theme object.
	 */
	abstract public function execute( $install_actions, $api, $stylesheet, $theme_info );
}
