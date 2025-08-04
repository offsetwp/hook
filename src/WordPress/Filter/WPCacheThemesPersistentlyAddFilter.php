<?php
/**
 * WPCacheThemesPersistentlyAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to get the cache of the registered theme directories.
 *
 * @since 3.4.0
 */
abstract class WPCacheThemesPersistentlyAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_cache_themes_persistently';

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
	 * @param bool $cache_expiration Whether to get the cache of the theme directories. Default false.
	 * @param string $context The class or function name calling the filter.
	 */
	abstract public function execute( $cache_expiration, $context );
}
