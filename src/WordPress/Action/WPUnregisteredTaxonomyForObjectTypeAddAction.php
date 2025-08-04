<?php
/**
 * WPUnregisteredTaxonomyForObjectTypeAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a taxonomy is unregistered for an object type.
 *
 * @since 5.1.0
 */
abstract class WPUnregisteredTaxonomyForObjectTypeAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'unregistered_taxonomy_for_object_type';

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
	 * @param string $taxonomy Taxonomy name.
	 * @param string $object_type Name of the object type.
	 */
	abstract public function execute( $taxonomy, $object_type );
}
