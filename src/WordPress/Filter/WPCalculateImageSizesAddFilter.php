<?php
/**
 * WPCalculateImageSizesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the output of 'wp_calculate_image_sizes()'.
 *
 * @since 4.4.0
 */
abstract class WPCalculateImageSizesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_calculate_image_sizes';

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
	 * @param string $sizes A source size value for use in a 'sizes' attribute.
	 * @param string|int[] $size Requested image size. Can be any registered image size name, or an array of width and height values in pixels ( in that order ).
	 * @param string|null $image_src The URL to the image file or null.
	 * @param array|null $image_meta The image meta data as returned by wp_get_attachment_metadata() or null.
	 * @param int $attachment_id Image attachment ID of the original image or 0.
	 */
	abstract public function execute( $sizes, $size, $image_src, $image_meta, $attachment_id );
}
