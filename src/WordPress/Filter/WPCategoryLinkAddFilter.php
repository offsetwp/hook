<?php
/**
 * WPCategoryLinkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the category link.
 *
 * @since 1.5.0
 * @since 2.5.0 Deprecated in favor of {@see 'term_link'} filter.
 * @since 5.4.1 Restored ( un-deprecated ).
 */
abstract class WPCategoryLinkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'category_link';

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
	 * @param string $termlink Category link URL.
	 * @param int $term_id Term ID.
	 */
	abstract public function execute( $termlink, $term_id );
}
