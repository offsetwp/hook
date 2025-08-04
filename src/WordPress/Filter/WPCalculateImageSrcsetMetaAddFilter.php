<?php
/**
 * WPCalculateImageSrcsetMetaAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Pre-filters the image meta to be able to fix inconsistencies in the stored data.
 *
 * @since 4.5.0
 */
abstract class WPCalculateImageSrcsetMetaAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_calculate_image_srcset_meta';

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
	 * @param array $image_meta The image meta data as returned by 'wp_get_attachment_metadata()'.
	 * @param array $size_array An array of requested width and height values.
	 * @param string $image_src The 'src' of the image.
	 * @param int $attachment_id The image attachment ID or 0 if not supplied.
	 */
	abstract public function execute( $image_meta, $size_array, $image_src, $attachment_id );
}
