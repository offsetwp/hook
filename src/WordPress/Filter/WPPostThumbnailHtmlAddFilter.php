<?php
/**
 * WPPostThumbnailHtmlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the post thumbnail HTML.
 *
 * @since 2.9.0
 */
abstract class WPPostThumbnailHtmlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'post_thumbnail_html';

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
	 * @param string $html The post thumbnail HTML.
	 * @param int $post_id The post ID.
	 * @param int $post_thumbnail_id The post thumbnail ID, or 0 if there isn't one.
	 * @param string|int[] $size Requested image size. Can be any registered image size name, or an array of width and height values in pixels ( in that order ).
	 * @param string|array $attr Query string or array of attributes.
	 */
	abstract public function execute( $html, $post_id, $post_thumbnail_id, $size, $attr );
}
