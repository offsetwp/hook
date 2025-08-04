<?php
/**
 * WPAfterThemeRowAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after each row in the Multisite themes list table.
 *
 * @since 3.1.0
 */
abstract class WPAfterThemeRowAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'after_theme_row';

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
	 * @param string $stylesheet Directory name of the theme.
	 * @param \WP_Theme $theme Current WP_Theme object.
	 * @param string $status Status of the theme.
	 */
	abstract public function execute( $stylesheet, $theme, $status );
}
