<?php
/**
 * WPPreUnzipFileAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters archive unzipping to override with a custom process.
 *
 * @since 6.4.0
 */
abstract class WPPreUnzipFileAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_unzip_file';

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
	 * @param null|true|\WP_Error $result The result of the override. True on success, otherwise WP Error. Default null.
	 * @param string $file Full path and filename of ZIP archive.
	 * @param string $to Full path on the filesystem to extract archive to.
	 * @param string[] $needed_dirs A full list of required folders that need to be created.
	 * @param float $required_space The space required to unzip the file and copy its contents, with a 10% buffer.
	 */
	abstract public function execute( $result, $file, $to, $needed_dirs, $required_space );
}
