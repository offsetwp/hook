<?php
/**
 * WPImgTagAddSrcsetAndSizesAttrAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to add the `srcset` and `sizes` HTML attributes to the img tag. Default `true`.
 *
 * @since 5.5.0
 */
abstract class WPImgTagAddSrcsetAndSizesAttrAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_img_tag_add_srcset_and_sizes_attr';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param bool $value The filtered value, defaults to <code>true</code>.
	 * @param string $image The HTML <code>img</code> tag where the attribute should be added.
	 * @param string $context Additional context about how the function was called or where the img tag is.
	 * @param int $attachment_id The image attachment ID.
	 */
	abstract public function execute( $value, $image, $context, $attachment_id );
}
