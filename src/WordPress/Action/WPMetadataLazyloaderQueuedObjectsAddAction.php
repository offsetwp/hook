<?php
/**
 * WPMetadataLazyloaderQueuedObjectsAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after objects are added to the metadata lazy-load queue.
 *
 * @since 4.5.0
 */
abstract class WPMetadataLazyloaderQueuedObjectsAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'metadata_lazyloader_queued_objects';

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
	 * @param array $object_ids Array of object IDs.
	 * @param string $object_type Type of object being queued.
	 * @param \WP_Metadata_Lazyloader $lazyloader The lazy-loader object.
	 */
	abstract public function execute( $object_ids, $object_type, $lazyloader );
}
