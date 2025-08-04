<?php
/**
 * WPTheWeekdayDateAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the localized weekday of the post, for display.
 *
 * @since 0.71
 */
abstract class WPTheWeekdayDateAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'the_weekday_date';

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
	 * @param string $the_weekday_date The weekday on which the post was written.
	 * @param string $before The HTML to output before the date.
	 * @param string $after The HTML to output after the date.
	 */
	abstract public function execute( $the_weekday_date, $before, $after );
}
