<?php
/**
 * WPListTermsExclusionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the terms to exclude from the terms query.
 *
 * @since 2.3.0
 */
abstract class WPListTermsExclusionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'list_terms_exclusions';

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
	 * @param string $exclusions <code>NOT IN</code> clause of the terms query.
	 * @param array $args An array of terms query arguments.
	 * @param string[] $taxonomies An array of taxonomy names.
	 */
	abstract public function execute( $exclusions, $args, $taxonomies );
}
