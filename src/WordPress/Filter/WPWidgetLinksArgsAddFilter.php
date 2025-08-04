<?php
/**
 * WPWidgetLinksArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the arguments for the Links widget.
 *
 * @since 2.6.0
 * @since 4.4.0 Added the `$instance` parameter.
 *
 * @see wp_list_bookmarks()
 */
abstract class WPWidgetLinksArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'widget_links_args';

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
	 * @param array $widget_links_args An array of arguments to retrieve the links list.
	 * @param array $instance The settings for the particular instance of the widget.
	 */
	abstract public function execute( $widget_links_args, $instance );
}
