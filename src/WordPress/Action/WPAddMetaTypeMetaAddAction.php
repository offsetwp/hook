<?php
/**
 * WPAddMetaTypeMetaAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately before meta of a specific type is added.
 *
 * @since 3.1.0
 */
abstract class WPAddMetaTypeMetaAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'add_{$meta_type}_meta';

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
	 * @param int $object_id ID of the object metadata is for.
	 * @param string $meta_key Metadata key.
	 * @param mixed $_meta_value Metadata value.
	 */
	abstract public function execute( $object_id, $meta_key, $_meta_value );
}
