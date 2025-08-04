<?php
/**
 * WPCalculateImageSrcsetAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters an image's 'srcset' sources.
 *
 * @since 4.4.0
 */
abstract class WPCalculateImageSrcsetAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_calculate_image_srcset';

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
	 * @param array $sources One or more arrays of source data to include in the 'srcset'.
	 * @param array $size_array An array of requested width and height values.
	 * @param string $image_src The 'src' of the image.
	 * @param array $image_meta The image meta data as returned by 'wp_get_attachment_metadata()'.
	 * @param int $attachment_id Image attachment ID or 0.
	 */
	abstract public function execute( $sources, $size_array, $image_src, $image_meta, $attachment_id );
}
