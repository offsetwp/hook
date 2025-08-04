<?php
/**
 * WPShouldReplaceInsecureHomeUrlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether WordPress should replace old HTTP URLs to the site with their HTTPS counterpart.
 *
 * @since 5.7.0
 */
abstract class WPShouldReplaceInsecureHomeUrlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_should_replace_insecure_home_url';

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
	 * @param bool $should_replace_insecure_home_url Whether insecure HTTP URLs to the site should be replaced.
	 */
	abstract public function execute( $should_replace_insecure_home_url );
}
