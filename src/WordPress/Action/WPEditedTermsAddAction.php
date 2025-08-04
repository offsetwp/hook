<?php
/**
 * WPEditedTermsAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately after a term is updated in the database, but before its term-taxonomy relationship is updated.
 *
 * @since 2.9.0
 * @since 6.1.0 The `$args` parameter was added.
 */
abstract class WPEditedTermsAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'edited_terms';

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
	 * @param int $term_id Term ID.
	 * @param string $taxonomy Taxonomy slug.
	 * @param array $args Arguments passed to wp_update_term().
	 */
	abstract public function execute( $term_id, $taxonomy, $args );
}
