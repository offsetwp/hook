<?php
/**
 * WPPreRecurseDirsizeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the amount of storage space used by one directory and all its children, in megabytes.
 *
 * @since 5.6.0
 */
abstract class WPPreRecurseDirsizeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_recurse_dirsize';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param int|false $space_used The amount of used space, in bytes. Default false.
	 * @param string $directory Full path of a directory.
	 * @param string|string[]|null $exclude Full path of a subdirectory to exclude from the total, or array of paths.
	 * @param int $max_execution_time Maximum time to run before giving up. In seconds.
	 * @param array $directory_cache Array of cached directory paths.
	 */
	abstract public function execute( $space_used, $directory, $exclude, $max_execution_time, $directory_cache );
}
