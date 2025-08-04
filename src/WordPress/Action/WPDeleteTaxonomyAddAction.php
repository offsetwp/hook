<?php
/**
 * WPDeleteTaxonomyAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after a term in a specific taxonomy is deleted.
 *
 * @since 2.3.0
 * @since 4.5.0 Introduced the `$object_ids` argument.
 */
abstract class WPDeleteTaxonomyAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'delete_{$taxonomy}';

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
	 * @param int $term Term ID.
	 * @param int $tt_id Term taxonomy ID.
	 * @param \WP_Term $deleted_term Copy of the already-deleted term.
	 * @param array $object_ids List of term object IDs.
	 */
	abstract public function execute( $term, $tt_id, $deleted_term, $object_ids );
}
