<?php
/**
 * WPInstallThemeOverwriteActionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of action links available following a single theme installation failure when overwriting is allowed.
 *
 * @since 5.5.0
 */
abstract class WPInstallThemeOverwriteActionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'install_theme_overwrite_actions';

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
	 * @param string[] $install_actions Array of theme action links.
	 * @param object $api Object containing WordPress.org API theme data.
	 * @param array $new_theme_data Array with uploaded theme data.
	 */
	abstract public function execute( $install_actions, $api, $new_theme_data );
}
