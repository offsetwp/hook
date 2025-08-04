<?php
/**
 * WPNavMenuSubmenuCssClassAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the CSS class( es ) applied to a menu list element.
 *
 * @since 4.8.0
 */
abstract class WPNavMenuSubmenuCssClassAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'nav_menu_submenu_css_class';

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
	 * @param string[] $classes Array of the CSS classes that are applied to the menu <code>&lt;ul&gt;</code> element.
	 * @param \stdClass $args An object of <code>wp_nav_menu()</code> arguments.
	 * @param int $depth Depth of menu item. Used for padding.
	 */
	abstract public function execute( $classes, $args, $depth );
}
