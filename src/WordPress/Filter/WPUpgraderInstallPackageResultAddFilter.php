<?php
/**
 * WPUpgraderInstallPackageResultAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the result of WP_Upgrader::install_package().
 *
 * @since 5.7.0
 */
abstract class WPUpgraderInstallPackageResultAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'upgrader_install_package_result';

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
	 * @param array|\WP_Error $result Result from WP_Upgrader::install_package().
	 * @param array $hook_extra Extra arguments passed to hooked filters.
	 */
	abstract public function execute( $result, $hook_extra );
}
