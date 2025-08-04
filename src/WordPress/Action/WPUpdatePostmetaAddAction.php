<?php
/**
 * WPUpdatePostmetaAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately before updating a post's metadata.
 *
 * @since 2.9.0
 */
abstract class WPUpdatePostmetaAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'update_postmeta';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param int $meta_id ID of metadata entry to update.
	 * @param int $object_id Post ID.
	 * @param string $meta_key Metadata key.
	 * @param mixed $meta_value Metadata value. This will be a PHP-serialized string representation of the value if the value is an array, an object, or itself a PHP-serialized string.
	 */
	abstract public function execute( $meta_id, $object_id, $meta_key, $meta_value );
}
