<?php
/**
 * WPEditNavMenuWalkerAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the Walker class used when adding nav menu items.
 *
 * @since 3.0.0
 */
abstract class WPEditNavMenuWalkerAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_edit_nav_menu_walker';

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
	 * @param string $class The walker class to use. Default 'Walker_Nav_Menu_Edit'.
	 * @param int $menu_id ID of the menu being rendered.
	 */
	abstract public function execute( $class, $menu_id );
}
