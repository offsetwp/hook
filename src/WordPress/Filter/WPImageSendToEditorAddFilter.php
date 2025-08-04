<?php
/**
 * WPImageSendToEditorAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the image HTML markup to send to the editor when inserting an image.
 *
 * @since 2.5.0
 * @since 5.6.0 The `$rel` parameter was added.
 */
abstract class WPImageSendToEditorAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'image_send_to_editor';

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
	public int $hook_accepted_args = 9;


	/**
	 * The hook execution method
	 *
	 * @param string $html The image HTML markup to send.
	 * @param int $id The attachment ID.
	 * @param string $caption The image caption.
	 * @param string $title The image title.
	 * @param string $align The image alignment.
	 * @param string $url The image source URL.
	 * @param string|int[] $size Requested image size. Can be any registered image size name, or an array of width and height values in pixels ( in that order ).
	 * @param string $alt The image alternative, or alt, text.
	 * @param string $rel The image rel attribute.
	 */
	abstract public function execute( $html, $id, $caption, $title, $align, $url, $size, $alt, $rel );
}
