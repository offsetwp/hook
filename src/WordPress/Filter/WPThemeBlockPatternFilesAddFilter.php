<?php
/**
 * WPThemeBlockPatternFilesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters list of block pattern files for a theme.
 *
 * @since 6.8.0
 */
abstract class WPThemeBlockPatternFilesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'theme_block_pattern_files';

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
	 * @param array $files Array of theme files found within <code>patterns</code> directory.
	 * @param string $dirpath Path of theme <code>patterns</code> directory being scanned.
	 */
	abstract public function execute( $files, $dirpath );
}
