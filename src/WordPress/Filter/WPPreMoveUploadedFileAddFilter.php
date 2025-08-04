<?php
/**
 * WPPreMoveUploadedFileAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to short-circuit moving the uploaded file after passing all checks.
 *
 * @since 4.9.0
 */
abstract class WPPreMoveUploadedFileAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_move_uploaded_file';

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
	 * @param mixed $move_new_file If null ( default ) move the file after the upload.
	 * @param array $file Reference to a single element from <code>$_FILES</code>.
	 * @param string $new_file Filename of the newly-uploaded file.
	 * @param string $type Mime type of the newly-uploaded file.
	 */
	abstract public function execute( $move_new_file, $file, $new_file, $type );
}
