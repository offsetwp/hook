<?php
/**
 * WPAddedTermRelationshipAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately after an object-term relationship is added.
 *
 * @since 2.9.0
 * @since 4.7.0 Added the `$taxonomy` parameter.
 */
abstract class WPAddedTermRelationshipAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'added_term_relationship';

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
	 * @param int $object_id Object ID.
	 * @param int $tt_id Term taxonomy ID.
	 * @param string $taxonomy Taxonomy slug.
	 */
	abstract public function execute( $object_id, $tt_id, $taxonomy );
}
