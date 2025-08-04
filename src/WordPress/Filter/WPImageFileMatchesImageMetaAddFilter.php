<?php
/**
 * WPImageFileMatchesImageMetaAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether an image path or URI matches image meta.
 *
 * @since 5.5.0
 */
abstract class WPImageFileMatchesImageMetaAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_image_file_matches_image_meta';

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
	 * @param bool $match Whether the image relative path from the image meta matches the end of the URI or path to the image file.
	 * @param string $image_location Full path or URI to the tested image file.
	 * @param array $image_meta The image meta data as returned by 'wp_get_attachment_metadata()'.
	 * @param int $attachment_id The image attachment ID or 0 if not supplied.
	 */
	abstract public function execute( $match, $image_location, $image_meta, $attachment_id );
}
