<?php
/**
 * WPGetSearchFormAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the HTML output of the search form.
 *
 * @since 2.7.0
 * @since 5.5.0 The `$args` parameter was added.
 */
abstract class WPGetSearchFormAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_search_form';

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
	 * @param string $form The search form HTML output.
	 * @param array $args The array of arguments for building the search form. See get_search_form() for information on accepted arguments.
	 */
	abstract public function execute( $form, $args );
}
