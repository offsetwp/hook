<?php
/**
 * WPPreAddSiteOptionOptionAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the value of a specific network option before it is added.
 *
 * @since 2.9.0 As 'pre_add_site<em>option</em>' . $key
 * @since 3.0.0
 * @since 4.4.0 The `$option` parameter was added.
 * @since 4.7.0 The `$network_id` parameter was added.
 */
abstract class WPPreAddSiteOptionOptionAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_add_site_option_{$option}';

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
	 * @param mixed $value Value of network option.
	 * @param string $option Option name.
	 * @param int $network_id ID of the network.
	 */
	abstract public function execute( $value, $option, $network_id );
}
