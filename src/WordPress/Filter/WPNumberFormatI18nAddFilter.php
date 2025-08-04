<?php
/**
 * WPNumberFormatI18nAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the number formatted based on the locale.
 *
 * @since 2.8.0
 * @since 4.9.0 The `$number` and `$decimals` parameters were added.
 */
abstract class WPNumberFormatI18nAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'number_format_i18n';

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
	 * @param string $formatted Converted number in string format.
	 * @param float $number The number to convert based on locale.
	 * @param int $decimals Precision of the number of decimal places.
	 */
	abstract public function execute( $formatted, $number, $decimals );
}
