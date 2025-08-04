<?php
/**
 * WPTaxonomyParentDropdownArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the taxonomy parent drop-down on the Edit Term page.
 *
 * @since 3.7.0
 * @since 4.2.0 Added `$context` parameter.
 */
abstract class WPTaxonomyParentDropdownArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'taxonomy_parent_dropdown_args';

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
	 * @param array $dropdown_args An array of taxonomy parent drop-down arguments.
	 * @param string $taxonomy The taxonomy slug.
	 * @param string $context Filter context. Accepts 'new' or 'edit'.
	 */
	abstract public function execute( $dropdown_args, $taxonomy, $context );
}
