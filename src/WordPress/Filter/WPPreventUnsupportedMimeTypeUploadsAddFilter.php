<?php
/**
 * WPPreventUnsupportedMimeTypeUploadsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filter whether the server should prevent uploads for image types it doesn't support. Default true.
 *
 * @since 6.8.0
 */
abstract class WPPreventUnsupportedMimeTypeUploadsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_prevent_unsupported_mime_type_uploads';

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
	 * @param bool $check_mime Whether to prevent uploads of unsupported image types.
	 * @param string|null $mime_type The mime type of the file being uploaded ( if available ).
	 */
	abstract public function execute( $check_mime, $mime_type );
}
