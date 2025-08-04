<?php
/**
 * WPGetAttachmentLinkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a retrieved attachment page link.
 *
 * @since 2.7.0
 * @since 5.1.0 Added the `$attr` parameter.
 */
abstract class WPGetAttachmentLinkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_get_attachment_link';

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
	public int $hook_accepted_args = 7;


	/**
	 * The hook execution method
	 *
	 * @param string $link_html The page link HTML output.
	 * @param int|\WP_Post $post Post ID or object. Can be 0 for the current global post.
	 * @param string|int[] $size Requested image size. Can be any registered image size name, or an array of width and height values in pixels ( in that order ).
	 * @param bool $permalink Whether to add permalink to image. Default false.
	 * @param bool $icon Whether to include an icon.
	 * @param string|false $text If string, will be link text.
	 * @param array|string $attr Array or string of attributes.
	 */
	abstract public function execute( $link_html, $post, $size, $permalink, $icon, $text, $attr );
}
