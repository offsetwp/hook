<?php
/**
 * WPSwitchThemeAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after the theme is switched.
 *
 * @since 1.5.0
 * @since 4.5.0 Introduced the `$old_theme` parameter.
 */
abstract class WPSwitchThemeAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'switch_theme';

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
	 * @param string $new_name Name of the new theme.
	 * @param \WP_Theme $new_theme WP_Theme instance of the new theme.
	 * @param \WP_Theme $old_theme WP_Theme instance of the old theme.
	 */
	abstract public function execute( $new_name, $new_theme, $old_theme );
}
