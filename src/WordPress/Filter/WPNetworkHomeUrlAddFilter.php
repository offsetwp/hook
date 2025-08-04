<?php
/**
 * WPNetworkHomeUrlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the network home URL.
 *
 * @since 3.0.0
 */
abstract class WPNetworkHomeUrlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'network_home_url';

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
	 * @param string $url The complete network home URL including scheme and path.
	 * @param string $path Path relative to the network home URL. Blank string if no path is specified.
	 * @param string|null $orig_scheme Scheme to give the URL context. Accepts 'http', 'https', 'relative' or null.
	 */
	abstract public function execute( $url, $path, $orig_scheme );
}
