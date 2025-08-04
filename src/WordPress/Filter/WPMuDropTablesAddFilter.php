<?php
/**
 * WPMuDropTablesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the tables to drop when the site is deleted.
 *
 * @since MU ( 3.0.0 ) MU ( 3.0.0 )
 */
abstract class WPMuDropTablesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wpmu_drop_tables';

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
	 * @param string[] $tables Array of names of the site tables to be dropped.
	 * @param int $site_id The ID of the site to drop tables for.
	 */
	abstract public function execute( $tables, $site_id );
}
