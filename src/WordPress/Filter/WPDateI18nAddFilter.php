<?php
/**
 * WPDateI18nAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the date formatted based on the locale.
 *
 * @since 2.8.0
 */
abstract class WPDateI18nAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'date_i18n';

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
	 * @param string $date Formatted date string.
	 * @param string $format Format to display the date.
	 * @param int $timestamp A sum of Unix timestamp and timezone offset in seconds. Might be without offset if input omitted timestamp but requested GMT.
	 * @param bool $gmt Whether to use GMT timezone. Only applies if timestamp was not provided. Default false.
	 */
	abstract public function execute( $date, $format, $timestamp, $gmt );
}
