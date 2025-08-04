<?php
/**
 * WPImageGetIntermediateSizeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the output of image_get_intermediate_size()
 *
 * @since 4.4.0
 *
 * @see image_get_intermediate_size()
 */
abstract class WPImageGetIntermediateSizeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'image_get_intermediate_size';

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
	 * @param array $data Array of file relative path, width, and height on success. May also include file absolute path and URL.
	 * @param int $post_id The ID of the image attachment.
	 * @param string|int[] $size Requested image size. Can be any registered image size name, or an array of width and height values in pixels ( in that order ).
	 */
	abstract public function execute( $data, $post_id, $size );
}
