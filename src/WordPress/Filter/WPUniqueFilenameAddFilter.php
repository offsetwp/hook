<?php
/**
 * WPUniqueFilenameAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the result when generating a unique file name.
 *
 * @since 4.5.0
 * @since 5.8.1 The `$alt_filenames` and `$number` parameters were added.
 */
abstract class WPUniqueFilenameAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_unique_filename';

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
	public int $hook_accepted_args = 6;


	/**
	 * The hook execution method
	 *
	 * @param string $filename Unique file name.
	 * @param string $ext File extension. Example: ".png".
	 * @param string $dir Directory path.
	 * @param callable|null $unique_filename_callback Callback function that generates the unique file name.
	 * @param string[] $alt_filenames Array of alternate file names that were checked for collisions.
	 * @param int|string $number The highest number that was used to make the file name unique or an empty string if unused.
	 */
	abstract public function execute( $filename, $ext, $dir, $unique_filename_callback, $alt_filenames, $number );
}
