<?php
/**
 * WPCustomizeDynamicSettingClassAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Allow non-statically created settings to be constructed with custom WP_Customize_Setting subclass.
 *
 * @since 4.2.0
 */
abstract class WPCustomizeDynamicSettingClassAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_dynamic_setting_class';

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
	 * @param string $setting_class WP_Customize_Setting or a subclass.
	 * @param string $setting_id ID for dynamic setting, usually coming from <code>$_POST['customized']</code>.
	 * @param array $setting_args WP_Customize_Setting or a subclass.
	 */
	abstract public function execute( $setting_class, $setting_id, $setting_args );
}
