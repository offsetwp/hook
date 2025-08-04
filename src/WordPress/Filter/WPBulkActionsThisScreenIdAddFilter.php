<?php
/**
 * WPBulkActionsThisScreenIdAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the items in the bulk actions menu of the list table.
 *
 * @since 3.1.0
 * @since 5.6.0 A bulk action can now contain an array of options in order to create an optgroup.
 */
abstract class WPBulkActionsThisScreenIdAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'bulk_actions-{$this->screen->id}';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param array $actions An array of the available bulk actions.
	 */
	abstract public function execute( $actions );
}
