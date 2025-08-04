<?php
/**
 * WPWidgetNavMenuArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the arguments for the Navigation Menu widget.
 *
 * @since 4.2.0
 * @since 4.4.0 Added the `$instance` parameter.
 */
abstract class WPWidgetNavMenuArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'widget_nav_menu_args';

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
	 * @param array $nav_menu_args An array of arguments passed to wp_nav_menu() to retrieve a navigation menu.
	 * @param \WP_Term $nav_menu Nav menu object for the current menu.
	 * @param array $args Display arguments for the current widget.
	 * @param array $instance Array of settings for the current widget.
	 */
	abstract public function execute( $nav_menu_args, $nav_menu, $args, $instance );
}
