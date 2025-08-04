<?php
/**
 * WPUpgraderPostInstallAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the installation response after the installation has finished.
 *
 * @since 2.8.0
 */
abstract class WPUpgraderPostInstallAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'upgrader_post_install';

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
	 * @param bool $response Installation response.
	 * @param array $hook_extra Extra arguments passed to hooked filters.
	 * @param array $result Installation result data.
	 */
	abstract public function execute( $response, $hook_extra, $result );
}
