<?php
/**
 * WPDeleteAttachmentAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires before an attachment is deleted, at the start of wp_delete_attachment().
 *
 * @since 2.0.0
 * @since 5.5.0 Added the `$post` parameter.
 */
abstract class WPDeleteAttachmentAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'delete_attachment';

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
	 * @param int $post_id Attachment ID.
	 * @param \WP_Post $post Post object.
	 */
	abstract public function execute( $post_id, $post );
}
