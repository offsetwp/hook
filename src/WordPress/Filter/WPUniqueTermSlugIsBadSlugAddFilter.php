<?php
/**
 * WPUniqueTermSlugIsBadSlugAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the proposed unique term slug is bad.
 *
 * @since 4.3.0
 */
abstract class WPUniqueTermSlugIsBadSlugAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_unique_term_slug_is_bad_slug';

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
	 * @param bool $needs_suffix Whether the slug needs to be made unique with a suffix.
	 * @param string $slug The slug.
	 * @param object $term Term object.
	 */
	abstract public function execute( $needs_suffix, $slug, $term );
}
