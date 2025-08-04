<?php
/**
 * WPIntermediateImageSizesAdvancedAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the image sizes automatically generated when uploading an image.
 *
 * @since 2.9.0
 * @since 4.4.0 Added the `$image_meta` argument.
 * @since 5.3.0 Added the `$attachment_id` argument.
 */
abstract class WPIntermediateImageSizesAdvancedAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'intermediate_image_sizes_advanced';

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
	 * @param array $new_sizes Associative array of image sizes to be created.
	 * @param array $image_meta The image meta data: width, height, file, sizes, etc.
	 * @param int $attachment_id The attachment post ID for the image.
	 */
	abstract public function execute( $new_sizes, $image_meta, $attachment_id );
}
