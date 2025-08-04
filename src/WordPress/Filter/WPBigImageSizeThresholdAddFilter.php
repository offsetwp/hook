<?php
/**
 * WPBigImageSizeThresholdAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the "BIG image" threshold value.
 *
 * @since 5.3.0
 */
abstract class WPBigImageSizeThresholdAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'big_image_size_threshold';

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
	 * @param int $threshold The threshold value in pixels. Default 2560.
	 * @param array $imagesize Indexed array of the image width and height in pixels.
	 * @param string $file Full path to the uploaded image file.
	 * @param int $attachment_id Attachment post ID.
	 */
	abstract public function execute( $threshold, $imagesize, $file, $attachment_id );
}
