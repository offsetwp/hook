<?php
/**
 * WPAutomaticUpdatesIsVcsCheckoutAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the automatic updater should consider a filesystem location to be potentially managed by a version control system.
 *
 * @since 3.7.0
 */
abstract class WPAutomaticUpdatesIsVcsCheckoutAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'automatic_updates_is_vcs_checkout';

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
	 * @param bool $checkout Whether a VCS checkout was discovered at <code>$context</code> or ABSPATH, or anywhere higher.
	 * @param string $context The filesystem context ( a path ) against which filesystem status should be checked.
	 */
	abstract public function execute( $checkout, $context );
}
