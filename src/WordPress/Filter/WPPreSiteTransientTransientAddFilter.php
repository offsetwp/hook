<?php
/**
 * WPPreSiteTransientTransientAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the value of an existing site transient before it is retrieved.
 *
 * @since 2.9.0
 * @since 4.4.0 The `$transient` parameter was added.
 */
abstract class WPPreSiteTransientTransientAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_site_transient_{$transient}';

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
	 * @param mixed $pre_site_transient The default value to return if the site transient does not exist. Any value other than false will short-circuit the retrieval of the transient, and return that value.
	 * @param string $transient Transient name.
	 */
	abstract public function execute( $pre_site_transient, $transient );
}
