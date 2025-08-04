<?php
/**
 * WPSpeculationRulesConfigurationAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the way that speculation rules are configured.
 *
 * @since 6.8.0
 *
 * @see https://developer.chrome.com/docs/web-platform/prerender-pages
 */
abstract class WPSpeculationRulesConfigurationAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_speculation_rules_configuration';

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
	 * @param array<string,string>|null $config Associative array with 'mode' and 'eagerness' keys, or <code>null</code>. The default value for both of the keys is 'auto'. Other possible values for 'mode' are 'prefetch' and 'prerender'. Other possible values for 'eagerness' are 'eager', 'moderate', and 'conservative'. The value <code>null</code> is used to disable speculative loading entirely.
	 */
	abstract public function execute( $config );
}
