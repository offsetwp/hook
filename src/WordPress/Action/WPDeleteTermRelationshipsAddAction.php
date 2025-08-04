<?php
/**
 * WPDeleteTermRelationshipsAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately before an object-term relationship is deleted.
 *
 * @since 2.9.0
 * @since 4.7.0 Added the `$taxonomy` parameter.
 */
abstract class WPDeleteTermRelationshipsAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'delete_term_relationships';

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
	 * @param array $tt_ids An array of term taxonomy IDs.
	 * @param string $taxonomy Taxonomy slug.
	 */
	abstract public function execute( $object_id, $tt_ids, $taxonomy );
}
