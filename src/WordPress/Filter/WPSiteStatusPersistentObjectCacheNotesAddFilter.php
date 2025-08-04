<?php
/**
 * WPSiteStatusPersistentObjectCacheNotesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the second paragraph of the health check's description when suggesting the use of a persistent object cache.
 *
 * @since 6.1.0
 */
abstract class WPSiteStatusPersistentObjectCacheNotesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'site_status_persistent_object_cache_notes';

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
	 * @param string $notes The notes appended to the health check description.
	 * @param string[] $available_services The list of available persistent object cache services.
	 */
	abstract public function execute( $notes, $available_services );
}
