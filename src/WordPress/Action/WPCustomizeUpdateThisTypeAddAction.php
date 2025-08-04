<?php
/**
 * WPCustomizeUpdateThisTypeAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when the WP_Customize_Setting::update() method is called for settings not handled as theme_mods or options.
 *
 * @since 3.4.0
 */
abstract class WPCustomizeUpdateThisTypeAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_update_{$this->type}';

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
	 * @param mixed $value Value of the setting.
	 * @param \WP_Customize_Setting $setting WP_Customize_Setting instance.
	 */
	abstract public function execute( $value, $setting );
}
