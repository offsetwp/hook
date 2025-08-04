<?php
/**
 * WPRegisterSettingArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the registration arguments when registering a setting.
 *
 * @since 4.7.0
 */
abstract class WPRegisterSettingArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'register_setting_args';

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
	 * @param array $args Array of setting registration arguments.
	 * @param array $defaults Array of default arguments.
	 * @param string $option_group Setting group.
	 * @param string $option_name Setting name.
	 */
	abstract public function execute( $args, $defaults, $option_group, $option_name );
}
