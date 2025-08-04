<?php
/**
 * WPImgTagAddDecodingAttrAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the `decoding` attribute value to add to an image. Default `async`.
 *
 * @since 6.1.0
 */
abstract class WPImgTagAddDecodingAttrAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_img_tag_add_decoding_attr';

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
	 * @param string|false|null $value The <code>decoding</code> attribute value. Returning a falsey value will result in the attribute being omitted for the image. Otherwise, it may be: 'async', 'sync', or 'auto'. Defaults to false.
	 * @param string $image The HTML <code>img</code> tag to be filtered.
	 * @param string $context Additional context about how the function was called or where the img tag is.
	 */
	abstract public function execute( $value, $image, $context );
}
