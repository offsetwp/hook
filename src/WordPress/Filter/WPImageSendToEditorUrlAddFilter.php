<?php
/**
 * WPImageSendToEditorUrlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the image URL sent to the editor.
 *
 * @since 2.8.0
 */
abstract class WPImageSendToEditorUrlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'image_send_to_editor_url';

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
	 * @param string $html HTML markup sent to the editor for an image.
	 * @param string $src Image source URL.
	 * @param string $alt Image alternate, or alt, text.
	 * @param string $align The image alignment. Default 'alignnone'. Possible values include 'alignleft', 'aligncenter', 'alignright', 'alignnone'.
	 */
	abstract public function execute( $html, $src, $alt, $align );
}
