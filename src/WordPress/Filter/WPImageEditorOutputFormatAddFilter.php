<?php
/**
 * WPImageEditorOutputFormatAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the image editor output format mapping.
 *
 * @see WP_Image_Editor::get_output_format()
 *
 * @since 5.8.0
 * @since 6.7.0 The default was changed from an empty array to an array containing the HEIC/HEIF images mime types.
 */
abstract class WPImageEditorOutputFormatAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'image_editor_output_format';

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
	 * @param array $output_format An array of mime type mappings. Maps a source mime type to a new destination mime type. By default maps HEIC/HEIF input to JPEG output.
	 * @param string $filename Path to the image.
	 * @param string $mime_type The source image mime type.
	 */
	abstract public function execute( $output_format, $filename, $mime_type );
}
