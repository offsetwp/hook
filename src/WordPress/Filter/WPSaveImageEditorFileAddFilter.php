<?php
/**
 * WPSaveImageEditorFileAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to skip saving the image file.
 *
 * @since 3.5.0
 */
abstract class WPSaveImageEditorFileAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_save_image_editor_file';

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
	 * @param bool|null $override Value to return instead of saving. Default null.
	 * @param string $filename Name of the file to be saved.
	 * @param \WP_Image_Editor $image The image editor instance.
	 * @param string $mime_type The mime type of the image.
	 * @param int $post_id Attachment post ID.
	 */
	abstract public function execute( $override, $filename, $image, $mime_type, $post_id );
}
