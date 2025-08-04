<?php
/**
 * WPCleanTermCacheAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires once after each taxonomy's term cache has been cleaned.
 *
 * @since 2.5.0
 * @since 4.5.0 Added the `$clean_taxonomy` parameter.
 */
abstract class WPCleanTermCacheAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'clean_term_cache';

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
	 * @param array $ids An array of term IDs.
	 * @param string $taxonomy Taxonomy slug.
	 * @param bool $clean_taxonomy Whether or not to clean taxonomy-wide caches.
	 */
	abstract public function execute( $ids, $taxonomy, $clean_taxonomy );
}
