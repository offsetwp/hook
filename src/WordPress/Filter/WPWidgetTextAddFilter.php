<?php
/**
 * WPWidgetTextAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the content of the Text widget.
 *
 * @since 2.3.0
 * @since 4.4.0 Added the `$widget` parameter.
 * @since 4.8.1 The `$widget` param may now be a `WP_Widget_Custom_HTML` object in addition to a `WP_Widget_Text` object.
 */
abstract class WPWidgetTextAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'widget_text';

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
	 * @param string $text The widget content.
	 * @param array $instance Array of settings for the current widget.
	 * @param \WP_Widget_Text|\WP_Widget_Custom_HTML $widget Current text or HTML widget instance.
	 */
	abstract public function execute( $text, $instance, $widget );
}
