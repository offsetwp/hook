<?php
/**
 * WPCheckFiletypeAndExtAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the "real" file type of the given file.
 *
 * @since 3.0.0
 * @since 5.1.0 The $real_mime parameter was added.
 */
abstract class WPCheckFiletypeAndExtAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_check_filetype_and_ext';

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
	 * @param array $wp_check_filetype_and_ext Values for the extension, mime type, and corrected filename.
	 * @param string $file Full path to the file.
	 * @param string $filename The name of the file ( may differ from $file due to $file being in a tmp directory ).
	 * @param string[]|null $mimes Array of mime types keyed by their file extension regex, or null if none were provided.
	 * @param string|false $real_mime The actual mime type or false if the type cannot be determined.
	 */
	abstract public function execute( $wp_check_filetype_and_ext, $file, $filename, $mimes, $real_mime );
}
