<?php
/**
 * WPImageDownsizeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to preempt the output of image_downsize().
 *
 * @since 2.5.0
 */
abstract class WPImageDownsizeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'image_downsize';

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
	 * @param bool|array $downsize Whether to short-circuit the image downsize.
	 * @param int $id Attachment ID for image.
	 * @param string|int[] $size Requested image size. Can be any registered image size name, or an array of width and height values in pixels ( in that order ).
	 */
	abstract public function execute( $downsize, $id, $size );
}
