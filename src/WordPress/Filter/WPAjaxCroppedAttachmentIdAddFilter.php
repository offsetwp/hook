<?php
/**
 * WPAjaxCroppedAttachmentIdAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the attachment ID for a cropped image.
 *
 * @since 4.3.0
 */
abstract class WPAjaxCroppedAttachmentIdAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_ajax_cropped_attachment_id';

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
	 * @param int $attachment_id The attachment ID of the cropped image.
	 * @param string $context The Customizer control requesting the cropped image.
	 */
	abstract public function execute( $attachment_id, $context );
}
