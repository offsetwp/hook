<?php
/**
 * WPTheModifiedDateAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the date a post was last modified, for display.
 *
 * @since 2.1.0
 */
abstract class WPTheModifiedDateAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'the_modified_date';

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
	 * @param string $the_modified_date The last modified date.
	 * @param string $format PHP date format.
	 * @param string $before HTML output before the date.
	 * @param string $after HTML output after the date.
	 */
	abstract public function execute( $the_modified_date, $format, $before, $after );
}
