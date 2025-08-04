<?php
/**
 * WPInThemeUpdateMessageThemeKeyAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires at the end of the update message container in each row of the themes list table.
 *
 * @since 3.1.0
 */
abstract class WPInThemeUpdateMessageThemeKeyAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'in_theme_update_message-{$theme_key}';

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
	 * @param \WP_Theme $theme The WP_Theme object.
	 * @param array $response An array of metadata about the available theme update.
	 */
	abstract public function execute( $theme, $response );
}
