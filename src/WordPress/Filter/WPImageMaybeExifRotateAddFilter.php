<?php
/**
 * WPImageMaybeExifRotateAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the `$orientation` value to correct it before rotating or to prevent rotating the image.
 *
 * @since 5.3.0
 */
abstract class WPImageMaybeExifRotateAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_image_maybe_exif_rotate';

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
	public int $hook_accepted_args = 2;


	/**
	 * The hook execution method
	 *
	 * @param int $orientation EXIF Orientation value as retrieved from the image file.
	 * @param string $file Path to the image file.
	 */
	abstract public function execute( $orientation, $file );
}
