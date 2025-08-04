<?php
/**
 * WPGetAttachmentId3KeysAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the editable list of keys to look up data from an attachment's metadata.
 *
 * @since 3.9.0
 */
abstract class WPGetAttachmentId3KeysAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_get_attachment_id3_keys';

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
	 * @param array $fields Key/value pairs of field keys to labels.
	 * @param \WP_Post $attachment Attachment object.
	 * @param string $context The context. Accepts 'edit', 'display'. Default 'display'.
	 */
	abstract public function execute( $fields, $attachment, $context );
}
