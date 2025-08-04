<?php
/**
 * WPGetAttachmentImageSrcAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the attachment image source result.
 *
 * @since 4.3.0
 */
abstract class WPGetAttachmentImageSrcAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_get_attachment_image_src';

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
	 * @param array $image Array of image data, or boolean false if no image is available.
	 * @param int $attachment_id Image attachment ID.
	 * @param string|int[] $size Requested image size. Can be any registered image size name, or an array of width and height values in pixels ( in that order ).
	 * @param bool $icon Whether the image should be treated as an icon.
	 */
	abstract public function execute( $image, $attachment_id, $size, $icon );
}
