<?php
/**
 * WPNavMenuItemsPostTypeNameRecentAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the posts displayed in the 'Most Recent' tab of the current post type's menu items meta box.
 *
 * @since 4.3.0
 * @since 4.9.0 Added the `$recent_args` parameter.
 */
abstract class WPNavMenuItemsPostTypeNameRecentAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'nav_menu_items_{$post_type_name}_recent';

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
	 * @param \WP_Post[] $most_recent An array of post objects being listed.
	 * @param array $args An array of <code>WP_Query</code> arguments for the meta box.
	 * @param array $box Arguments passed to <code>wp_nav_menu_item_post_type_meta_box()</code>.
	 * @param array $recent_args An array of <code>WP_Query</code> arguments for 'Most Recent' tab.
	 */
	abstract public function execute( $most_recent, $args, $box, $recent_args );
}
