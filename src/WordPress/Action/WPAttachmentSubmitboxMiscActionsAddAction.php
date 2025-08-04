<?php
/**
 * WPAttachmentSubmitboxMiscActionsAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after the 'Uploaded on' section of the Save meta box in the attachment editing screen.
 *
 * @since 3.5.0
 * @since 4.9.0 Added the `$post` parameter.
 */
abstract class WPAttachmentSubmitboxMiscActionsAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'attachment_submitbox_misc_actions';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param \WP_Post $post WP_Post object for the current attachment.
	 */
	abstract public function execute( $post );
}
