<?php
/**
 * WPAttachmentFieldsToSaveAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the attachment fields to be saved.
 *
 * @since 2.5.0
 *
 * @see wp_get_attachment_metadata()
 */
abstract class WPAttachmentFieldsToSaveAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'attachment_fields_to_save';

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
	public int $hook_accepted_args = 2;


	/**
	 * The hook execution method
	 *
	 * @param array $post An array of post data.
	 * @param array $attachment An array of attachment metadata.
	 */
	abstract public function execute( $post, $attachment );
}
