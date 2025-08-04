<?php
/**
 * WPGetAttachmentImageAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the HTML img element representing an image attachment.
 *
 * @since 5.6.0
 */
abstract class WPGetAttachmentImageAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_get_attachment_image';

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
	 * @param string $html HTML img element or empty string on failure.
	 * @param int $attachment_id Image attachment ID.
	 * @param string|int[] $size Requested image size. Can be any registered image size name, or an array of width and height values in pixels ( in that order ).
	 * @param bool $icon Whether the image should be treated as an icon.
	 * @param string[] $attr Array of attribute values for the image markup, keyed by attribute name. See wp_get_attachment_image().
	 */
	abstract public function execute( $html, $attachment_id, $size, $icon, $attr );
}
