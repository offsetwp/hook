<?php
/**
 * WPGetNavMenuObjectAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the nav_menu term retrieved for wp_get_nav_menu_object().
 *
 * @since 4.3.0
 */
abstract class WPGetNavMenuObjectAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_get_nav_menu_object';

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
	 * @param \WP_Term|false $menu_obj Term from nav_menu taxonomy, or false if nothing had been found.
	 * @param int|string|\WP_Term $menu The menu ID, slug, name, or object passed to wp_get_nav_menu_object().
	 */
	abstract public function execute( $menu_obj, $menu );
}
