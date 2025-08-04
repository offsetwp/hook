<?php
/**
 * WPAttachmentThumbnailArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the parameters for the attachment thumbnail creation.
 *
 * @since 3.9.0
 */
abstract class WPAttachmentThumbnailArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'attachment_thumbnail_args';

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
	 * @param array $image_attachment An array of parameters to create the thumbnail.
	 * @param array $metadata Current attachment metadata.
	 * @param array $uploaded Information about the newly-uploaded file.
	 */
	abstract public function execute( $image_attachment, $metadata, $uploaded );
}
