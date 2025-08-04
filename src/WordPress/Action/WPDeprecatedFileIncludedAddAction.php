<?php
/**
 * WPDeprecatedFileIncludedAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when a deprecated file is called.
 *
 * @since 2.5.0
 */
abstract class WPDeprecatedFileIncludedAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'deprecated_file_included';

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
	 * @param string $file The file that was called.
	 * @param string $replacement The file that should have been included based on ABSPATH.
	 * @param string $version The version of WordPress that deprecated the file.
	 * @param string $message A message regarding the change.
	 */
	abstract public function execute( $file, $replacement, $version, $message );
}
