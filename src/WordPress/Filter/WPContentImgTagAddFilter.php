<?php
/**
 * WPContentImgTagAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters an img tag within the content for a given context.
 *
 * @since 6.0.0
 */
abstract class WPContentImgTagAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_content_img_tag';

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
	 * @param string $filtered_image Full img tag with attributes that will replace the source img tag.
	 * @param string $context Additional context, like the current filter name or the function name from where this was called.
	 * @param int $attachment_id The image attachment ID. May be 0 in case the image is not an attachment.
	 */
	abstract public function execute( $filtered_image, $context, $attachment_id );
}
