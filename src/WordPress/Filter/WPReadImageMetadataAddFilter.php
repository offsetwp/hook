<?php
/**
 * WPReadImageMetadataAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the array of meta data read from an image's exif data.
 *
 * @since 2.5.0
 * @since 4.4.0 The `$iptc` parameter was added.
 * @since 5.0.0 The `$exif` parameter was added.
 */
abstract class WPReadImageMetadataAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_read_image_metadata';

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
	 * @param array $meta Image meta data.
	 * @param string $file Path to image file.
	 * @param int $image_type Type of image, one of the <code>IMAGETYPE_XXX</code> constants.
	 * @param array $iptc IPTC data.
	 * @param array $exif EXIF data.
	 */
	abstract public function execute( $meta, $file, $image_type, $iptc, $exif );
}
