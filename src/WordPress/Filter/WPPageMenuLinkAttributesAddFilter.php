<?php
/**
 * WPPageMenuLinkAttributesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the HTML attributes applied to a page menu item's anchor element.
 *
 * @since 4.8.0
 */
abstract class WPPageMenuLinkAttributesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'page_menu_link_attributes';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param array $atts The HTML attributes applied to the menu item's <code>&lt;a&gt;</code> element, empty strings are ignored.
	 * @param \WP_Post $page Page data object.
	 * @param int $depth Depth of page, used for padding.
	 * @param array $args An array of arguments.
	 * @param int $current_page_id ID of the current page.
	 */
	abstract public function execute( $atts, $page, $depth, $args, $current_page_id );
}
