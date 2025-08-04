<?php
/**
 * WPImageSrcGetDimensionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the 'wp_image_src_get_dimensions' value.
 *
 * @since 5.7.0
 */
abstract class WPImageSrcGetDimensionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_image_src_get_dimensions';

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
	 * @param array|false $dimensions Array with first element being the width and second element being the height, or false if dimensions could not be determined.
	 * @param string $image_src The image source file.
	 * @param array $image_meta The image meta data as returned by 'wp_get_attachment_metadata()'.
	 * @param int $attachment_id The image attachment ID. Default 0.
	 */
	abstract public function execute( $dimensions, $image_src, $image_meta, $attachment_id );
}
