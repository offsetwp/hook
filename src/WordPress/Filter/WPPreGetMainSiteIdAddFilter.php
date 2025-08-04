<?php
/**
 * WPPreGetMainSiteIdAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the main site ID.
 *
 * @since 4.9.0
 */
abstract class WPPreGetMainSiteIdAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_get_main_site_id';

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
	 * @param int|null $main_site_id If a positive integer is returned, it is interpreted as the main site ID.
	 * @param \WP_Network $network The network object for which the main site was detected.
	 */
	abstract public function execute( $main_site_id, $network );
}
