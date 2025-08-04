<?php
/**
 * WPCustomizeSanitizeJsThisIdAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a Customize setting value for use in JavaScript.
 *
 * @since 3.4.0
 */
abstract class WPCustomizeSanitizeJsThisIdAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_sanitize_js_{$this->id}';

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
	 * @param mixed $value The setting value.
	 * @param \WP_Customize_Setting $setting WP_Customize_Setting instance.
	 */
	abstract public function execute( $value, $setting );
}
