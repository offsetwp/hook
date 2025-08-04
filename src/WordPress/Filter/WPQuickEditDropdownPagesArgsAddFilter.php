<?php
/**
 * WPQuickEditDropdownPagesArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the arguments used to generate the Quick Edit page-parent drop-down.
 *
 * @since 2.7.0
 * @since 5.6.0 The `$bulk` parameter was added.
 *
 * @see wp_dropdown_pages()
 */
abstract class WPQuickEditDropdownPagesArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'quick_edit_dropdown_pages_args';

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
	 * @param array $dropdown_args An array of arguments passed to wp_dropdown_pages().
	 * @param bool $bulk A flag to denote if it's a bulk action.
	 */
	abstract public function execute( $dropdown_args, $bulk );
}
