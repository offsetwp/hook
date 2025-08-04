<?php
/**
 * WPRestPreInsertNavMenuItemAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a menu item before it is inserted via the REST API.
 *
 * @since 5.9.0
 */
abstract class WPRestPreInsertNavMenuItemAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_pre_insert_nav_menu_item';

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
	 * @param object $prepared_nav_item An object representing a single menu item prepared for inserting or updating the database.
	 * @param \WP_REST_Request $request Request object.
	 */
	abstract public function execute( $prepared_nav_item, $request );
}
