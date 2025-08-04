<?php
/**
 * WPDateQueryValidColumnsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of valid date query columns.
 *
 * @since 3.7.0
 * @since 4.1.0 Added 'user_registered' to the default recognized columns.
 * @since 4.6.0 Added 'registered' and 'last_updated' to the default recognized columns.
 */
abstract class WPDateQueryValidColumnsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'date_query_valid_columns';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param string[] $valid_columns An array of valid date query columns. Defaults are 'post_date', 'post_date_gmt', 'post_modified', 'post_modified_gmt', 'comment_date', 'comment_date_gmt', 'user_registered', 'registered', 'last_updated'.
	 */
	abstract public function execute( $valid_columns );
}
