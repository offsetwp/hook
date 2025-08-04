<?php
/**
 * WPGetTermsOrderbyAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the ORDERBY clause of the terms query.
 *
 * @since 2.8.0
 */
abstract class WPGetTermsOrderbyAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_terms_orderby';

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
	 * @param string $orderby <code>ORDERBY</code> clause of the terms query.
	 * @param array $args An array of term query arguments.
	 * @param string[] $taxonomies An array of taxonomy names.
	 */
	abstract public function execute( $orderby, $args, $taxonomies );
}
