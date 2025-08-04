<?php
/**
 * WPEditedImageMetadataAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the meta data for the new image created by editing an existing image.
 *
 * @since 5.5.0
 */
abstract class WPEditedImageMetadataAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_edited_image_metadata';

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
	 * @param array $new_image_meta Meta data for the new image.
	 * @param int $new_attachment_id Attachment post ID for the new image.
	 * @param int $attachment_id Attachment post ID for the edited ( parent ) image.
	 */
	abstract public function execute( $new_image_meta, $new_attachment_id, $attachment_id );
}
