<?php
/**
 * WPGenerateAttachmentMetadataAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the generated attachment meta data.
 *
 * @since 2.1.0
 * @since 5.3.0 The `$context` parameter was added.
 */
abstract class WPGenerateAttachmentMetadataAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_generate_attachment_metadata';

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
	 * @param array $metadata An array of attachment meta data.
	 * @param int $attachment_id Current attachment ID.
	 * @param string $context Additional context. Can be 'create' when metadata was initially created for new attachment or 'update' when the metadata was updated.
	 */
	abstract public function execute( $metadata, $attachment_id, $context );
}
