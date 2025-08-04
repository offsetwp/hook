<?php
/**
 * WPGetImageTagAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the HTML content for the image tag.
 *
 * @since 2.6.0
 */
abstract class WPGetImageTagAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_image_tag';

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
	 * @param string $html HTML content for the image.
	 * @param int $id Attachment ID.
	 * @param string $alt Image description for the alt attribute.
	 * @param string $title Image description for the title attribute.
	 * @param string $align Part of the class name for aligning the image.
	 * @param string|int[] $size Requested image size. Can be any registered image size name, or an array of width and height values in pixels ( in that order ).
	 */
	abstract public function execute( $html, $id, $alt, $title, $align, $size );
}
