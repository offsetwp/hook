<?php
/**
 * WPSiteStatusShouldSuggestPersistentObjectCacheAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to suggest use of a persistent object cache and bypass default threshold checks.
 *
 * @since 6.1.0
 */
abstract class WPSiteStatusShouldSuggestPersistentObjectCacheAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'site_status_should_suggest_persistent_object_cache';

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
	 * @param bool|null $suggest Boolean to short-circuit, for whether to suggest using a persistent object cache. Default null.
	 */
	abstract public function execute( $suggest );
}
