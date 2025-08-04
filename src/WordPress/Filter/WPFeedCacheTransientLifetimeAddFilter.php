<?php
/**
 * WPFeedCacheTransientLifetimeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the transient lifetime of the feed cache.
 *
 * @since 2.8.0
 */
abstract class WPFeedCacheTransientLifetimeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_feed_cache_transient_lifetime';

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
	 * @param int $lifetime Cache duration in seconds. Default is 43200 seconds ( 12 hours ).
	 * @param string $name Unique identifier for the cache object.
	 */
	abstract public function execute( $lifetime, $name );
}
