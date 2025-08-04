<?php
/**
 * WPGetMissingImageSubsizesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the array of missing image sub-sizes for an uploaded image.
 *
 * @since 5.3.0
 */
abstract class WPGetMissingImageSubsizesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_get_missing_image_subsizes';

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
	 * @param array[] $missing_sizes Associative array of arrays of image sub-size information for missing image sizes, keyed by image size name.
	 * @param array $image_meta The image meta data.
	 * @param int $attachment_id The image attachment post ID.
	 */
	abstract public function execute( $missing_sizes, $image_meta, $attachment_id );
}
