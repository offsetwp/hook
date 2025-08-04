<?php
/**
 * WPPreSiteOptionOptionAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the value of an existing network option before it is retrieved.
 *
 * @since 2.9.0 As 'pre_site<em>option</em>' . $key
 * @since 3.0.0
 * @since 4.4.0 The `$option` parameter was added.
 * @since 4.7.0 The `$network_id` parameter was added.
 * @since 4.9.0 The `$default_value` parameter was added.
 */
abstract class WPPreSiteOptionOptionAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_site_option_{$option}';

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
	 * @param mixed $pre_site_option The value to return instead of the option value. This differs from <code>$default_value</code>, which is used as the fallback value in the event the option doesn't exist elsewhere in get_network_option(). Default false ( to skip past the short-circuit ).
	 * @param string $option Option name.
	 * @param int $network_id ID of the network.
	 * @param mixed $default_value The fallback value to return if the option does not exist. Default false.
	 */
	abstract public function execute( $pre_site_option, $option, $network_id, $default_value );
}
