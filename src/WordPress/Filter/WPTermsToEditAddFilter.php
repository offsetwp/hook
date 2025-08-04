<?php
/**
 * WPTermsToEditAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the comma-separated list of terms available to edit.
 *
 * @since 2.8.0
 *
 * @see get_terms_to_edit()
 */
abstract class WPTermsToEditAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'terms_to_edit';

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
	 * @param string $terms_to_edit A comma-separated list of term names.
	 * @param string $taxonomy The taxonomy name for which to retrieve terms.
	 */
	abstract public function execute( $terms_to_edit, $taxonomy );
}
