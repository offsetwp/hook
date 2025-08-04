<?php
/**
 * WPSetObjectTermsAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after an object's terms have been set.
 *
 * @since 2.8.0
 */
abstract class WPSetObjectTermsAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'set_object_terms';

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
	public int $hook_accepted_args = 6;


	/**
	 * The hook execution method
	 *
	 * @param int $object_id Object ID.
	 * @param array $terms An array of object term IDs or slugs.
	 * @param array $tt_ids An array of term taxonomy IDs.
	 * @param string $taxonomy Taxonomy slug.
	 * @param bool $append Whether to append new terms to the old terms.
	 * @param array $old_tt_ids Old array of term taxonomy IDs.
	 */
	abstract public function execute( $object_id, $terms, $tt_ids, $taxonomy, $append, $old_tt_ids );
}
