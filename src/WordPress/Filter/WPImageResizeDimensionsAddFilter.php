<?php
/**
 * WPImageResizeDimensionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to preempt calculating the image resize dimensions.
 *
 * @since 3.4.0
 */
abstract class WPImageResizeDimensionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'image_resize_dimensions';

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
	public int $hook_accepted_args = 6;


	/**
	 * The hook execution method
	 *
	 * @param null|mixed $null Whether to preempt output of the resize dimensions.
	 * @param int $orig_w Original width in pixels.
	 * @param int $orig_h Original height in pixels.
	 * @param int $dest_w New width in pixels.
	 * @param int $dest_h New height in pixels.
	 * @param bool|array $crop Whether to crop image to specified width and height or resize. An array can specify positioning of the crop area. Default false.
	 */
	abstract public function execute( $null, $orig_w, $orig_h, $dest_w, $dest_h, $crop );
}
