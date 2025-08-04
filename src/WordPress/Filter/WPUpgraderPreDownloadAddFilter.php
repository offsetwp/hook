<?php
/**
 * WPUpgraderPreDownloadAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to return the package.
 *
 * @since 3.7.0
 * @since 5.5.0 Added the `$hook_extra` parameter.
 */
abstract class WPUpgraderPreDownloadAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'upgrader_pre_download';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param bool $reply Whether to bail without returning the package. Default false.
	 * @param string $package The package file name.
	 * @param \WP_Upgrader $upgrader The WP_Upgrader instance.
	 * @param array $hook_extra Extra arguments passed to hooked filters.
	 */
	abstract public function execute( $reply, $package, $upgrader, $hook_extra );
}
