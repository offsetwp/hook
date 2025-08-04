<?php
/**
 * WPImgCaptionShortcodeWidthAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the width of an image's caption.
 *
 * @since 3.7.0
 *
 * @see img_caption_shortcode()
 */
abstract class WPImgCaptionShortcodeWidthAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'img_caption_shortcode_width';

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
	 * @param int $width Width of the caption in pixels. To remove this inline style, return zero.
	 * @param array $atts Attributes of the caption shortcode.
	 * @param string $content The image element, possibly wrapped in a hyperlink.
	 */
	abstract public function execute( $width, $atts, $content );
}
