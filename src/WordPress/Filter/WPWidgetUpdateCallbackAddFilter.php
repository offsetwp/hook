<?php
/**
 * WPWidgetUpdateCallbackAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a widget's settings before saving.
 *
 * @since 2.8.0
 */
abstract class WPWidgetUpdateCallbackAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'widget_update_callback';

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
	 * @param array $instance The current widget instance's settings.
	 * @param array $new_instance Array of new widget settings.
	 * @param array $old_instance Array of old widget settings.
	 * @param \WP_Widget $widget The current widget instance.
	 */
	abstract public function execute( $instance, $new_instance, $old_instance, $widget );
}
