<?php
/**
 * WPPreWpUniqueFilenameFileListAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the file list used for calculating a unique filename for a newly added file.
 *
 * @since 5.5.0
 */
abstract class WPPreWpUniqueFilenameFileListAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_wp_unique_filename_file_list';

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
	 * @param array|null $files The list of files to use for filename comparisons. Default null ( to retrieve the list from the filesystem ).
	 * @param string $dir The directory for the new file.
	 * @param string $filename The proposed filename for the new file.
	 */
	abstract public function execute( $files, $dir, $filename );
}
