<?php
/**
 * WPTagRowActionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the action links displayed for each term in the Tags list table.
 *
 * @since 2.8.0
 * @since 3.0.0 Deprecated in favor of {@see '{$taxonomy}_row_actions'} filter.
 * @since 5.4.2 Restored ( un-deprecated ).
 */
abstract class WPTagRowActionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'tag_row_actions';

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
	 * @param string[] $actions An array of action links to be displayed. Default 'Edit', 'Quick Edit', 'Delete', and 'View'.
	 * @param \WP_Term $tag Term object.
	 */
	abstract public function execute( $actions, $tag );
}
