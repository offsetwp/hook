<?php
/**
 * WPCustomizeValueIdBaseAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a Customize setting value not handled as a theme_mod or option.
 *
 * @since 3.4.0
 * @since 4.6.0 Added the `$this` setting instance as the second parameter.
 */
abstract class WPCustomizeValueIdBaseAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_value_{$id_base}';

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
	 * @param mixed $default_value The setting default value. Default empty.
	 * @param \WP_Customize_Setting $setting The setting instance.
	 */
	abstract public function execute( $default_value, $setting );
}
