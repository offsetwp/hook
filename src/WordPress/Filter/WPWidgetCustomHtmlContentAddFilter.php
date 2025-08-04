<?php
/**
 * WPWidgetCustomHtmlContentAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the content of the Custom HTML widget.
 *
 * @since 4.8.1
 */
abstract class WPWidgetCustomHtmlContentAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'widget_custom_html_content';

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
	 * @param string $content The widget content.
	 * @param array $instance Array of settings for the current widget.
	 * @param \WP_Widget_Custom_HTML $widget Current Custom HTML widget instance.
	 */
	abstract public function execute( $content, $instance, $widget );
}
