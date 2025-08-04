<?php
/**
 * WPUpgraderOverwrotePackageAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when the upgrader has successfully overwritten a currently installed plugin or theme with an uploaded zip package.
 *
 * @since 5.5.0
 */
abstract class WPUpgraderOverwrotePackageAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'upgrader_overwrote_package';

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
	 * @param string $package The package file.
	 * @param array $data The new plugin or theme data.
	 * @param string $package_type The package type ( 'plugin' or 'theme' ).
	 */
	abstract public function execute( $package, $data, $package_type );
}
