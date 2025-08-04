<?php
/**
 * WPMediaSendToEditorAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the HTML markup for a media item sent to the editor.
 *
 * @since 2.5.0
 *
 * @see wp_get_attachment_metadata()
 */
abstract class WPMediaSendToEditorAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'media_send_to_editor';

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
	 * @param string $html HTML markup for a media item sent to the editor.
	 * @param int $send_id The first key from the $_POST['send'] data.
	 * @param array $attachment Array of attachment metadata.
	 */
	abstract public function execute( $html, $send_id, $attachment );
}
