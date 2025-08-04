<?php
/**
 * WPEnableLoadingAdvancedCacheDropinAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to enable loading of the advanced-cache.php drop-in.
 *
 * @since 4.6.0
 */
abstract class WPEnableLoadingAdvancedCacheDropinAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'enable_loading_advanced_cache_dropin';

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
	 * @param bool $enable_advanced_cache Whether to enable loading advanced-cache.php ( if present ). Default true.
	 */
	abstract public function execute( $enable_advanced_cache );
}
