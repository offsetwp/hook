<?php
/**
 * WPPrepareAttachmentForJsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the attachment data prepared for JavaScript.
 *
 * @since 3.5.0
 */
abstract class WPPrepareAttachmentForJsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_prepare_attachment_for_js';

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
	 * @param array $response Array of prepared attachment data. See {@see \wp_prepare_attachment_for_js()}.
	 * @param \WP_Post $attachment Attachment object.
	 * @param array|false $meta Array of attachment meta data, or false if there is none.
	 */
	abstract public function execute( $response, $attachment, $meta );
}
