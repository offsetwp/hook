<?php
/**
 * WPSafecssFilterAttrAllowCssAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the check for unsafe CSS in `safecss_filter_attr`.
 *
 * @since 5.5.0
 */
abstract class WPSafecssFilterAttrAllowCssAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'safecss_filter_attr_allow_css';

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
	 * @param bool $allow_css Whether the CSS in the test string is considered safe.
	 * @param string $css_test_string The CSS string to test.
	 */
	abstract public function execute( $allow_css, $css_test_string );
}
