<?php
/**
 * WPTheTermsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of terms to display.
 *
 * @since 2.9.0
 */
abstract class WPTheTermsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'the_terms';

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
	 * @param string $term_list List of terms to display.
	 * @param string $taxonomy The taxonomy name.
	 * @param string $before String to use before the terms.
	 * @param string $sep String to use between the terms.
	 * @param string $after String to use after the terms.
	 */
	abstract public function execute( $term_list, $taxonomy, $before, $sep, $after );
}
