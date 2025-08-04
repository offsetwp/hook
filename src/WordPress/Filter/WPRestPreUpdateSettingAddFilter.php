<?php
/**
 * WPRestPreUpdateSettingAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to preempt a setting value update via the REST API.
 *
 * @since 4.7.0
 */
abstract class WPRestPreUpdateSettingAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_pre_update_setting';

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
	 * @param bool $result Whether to override the default behavior for updating the value of a setting.
	 * @param string $name Setting name ( as shown in REST API responses ).
	 * @param mixed $value Updated setting value.
	 * @param array $args Arguments passed to register_setting() for this setting.
	 */
	abstract public function execute( $result, $name, $value, $args );
}
