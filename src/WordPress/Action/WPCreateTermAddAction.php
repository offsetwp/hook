<?php
/**
 * WPCreateTermAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires immediately after a new term is created, before the term cache is cleaned.
 *
 * @since 2.3.0
 * @since 6.1.0 The `$args` parameter was added.
 */
abstract class WPCreateTermAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'create_term';

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
	 * @param int $term_id Term ID.
	 * @param int $tt_id Term taxonomy ID.
	 * @param string $taxonomy Taxonomy slug.
	 * @param array $args Arguments passed to wp_insert_term().
	 */
	abstract public function execute( $term_id, $tt_id, $taxonomy, $args );
}
