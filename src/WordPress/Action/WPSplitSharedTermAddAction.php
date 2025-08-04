<?php
/**
 * WPSplitSharedTermAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a previously shared taxonomy term is split into two separate terms.
 *
 * @since 4.2.0
 */
abstract class WPSplitSharedTermAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'split_shared_term';

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
	 * @param int $term_id ID of the formerly shared term.
	 * @param int $new_term_id ID of the new term created for the $term_taxonomy_id.
	 * @param int $term_taxonomy_id ID for the term_taxonomy row affected by the split.
	 * @param string $taxonomy Taxonomy for the split term.
	 */
	abstract public function execute( $term_id, $new_term_id, $term_taxonomy_id, $taxonomy );
}
