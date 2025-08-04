<?php
/**
 * WPPreGetLanguageFilesFromPathAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the translation files retrieved from a specified path before the actual lookup.
 *
 * @since 6.5.0
 */
abstract class WPPreGetLanguageFilesFromPathAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_get_language_files_from_path';

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
	 * @param null|array $files List of translation files. Default null.
	 * @param string $path The path from which translation files are being fetched.
	 */
	abstract public function execute( $files, $path );
}
