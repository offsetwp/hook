<?php
/**
 * WPIsWideWidgetInCustomizerAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the given widget is considered "wide".
 *
 * @since 3.9.0
 */
abstract class WPIsWideWidgetInCustomizerAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'is_wide_widget_in_customizer';

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
	 * @param bool $is_wide Whether the widget is wide, Default false.
	 * @param string $widget_id Widget ID.
	 */
	abstract public function execute( $is_wide, $widget_id );
}
