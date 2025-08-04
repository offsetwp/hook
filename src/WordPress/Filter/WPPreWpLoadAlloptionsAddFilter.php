<?php
/**
 * WPPreWpLoadAlloptionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the array of alloptions before it is populated.
 *
 * @since 6.2.0
 */
abstract class WPPreWpLoadAlloptionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_wp_load_alloptions';

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
	 * @param array|null $alloptions An array of alloptions. Default null.
	 * @param bool $force_cache Whether to force an update of the local cache from the persistent cache. Default false.
	 */
	abstract public function execute( $alloptions, $force_cache );
}
