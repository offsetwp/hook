<?php
/**
 * WPNetworkSiteUrlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the network site URL.
 *
 * @since 3.0.0
 */
abstract class WPNetworkSiteUrlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'network_site_url';

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
	 * @param string $url The complete network site URL including scheme and path.
	 * @param string $path Path relative to the network site URL. Blank string if no path is specified.
	 * @param string|null $scheme Scheme to give the URL context. Accepts 'http', 'https', 'relative' or null.
	 */
	abstract public function execute( $url, $path, $scheme );
}
