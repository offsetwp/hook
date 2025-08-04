<?php
/**
 * WPLangCodesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the language codes.
 *
 * @since MU ( 3.0.0 ) MU ( 3.0.0 )
 */
abstract class WPLangCodesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'lang_codes';

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
	 * @param string[] $lang_codes Array of key/value pairs of language codes where key is the short version.
	 * @param string $code A two-letter designation of the language.
	 */
	abstract public function execute( $lang_codes, $code );
}
