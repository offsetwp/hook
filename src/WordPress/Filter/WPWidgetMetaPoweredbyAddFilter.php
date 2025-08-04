<?php
/**
 * WPWidgetMetaPoweredbyAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the "WordPress.org" list item HTML in the Meta widget.
 *
 * @since 3.6.0
 * @since 4.9.0 Added the `$instance` parameter.
 */
abstract class WPWidgetMetaPoweredbyAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'widget_meta_poweredby';

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
	 * @param string $html Default HTML for the WordPress.org list item.
	 * @param array $instance Array of settings for the current widget.
	 */
	abstract public function execute( $html, $instance );
}
