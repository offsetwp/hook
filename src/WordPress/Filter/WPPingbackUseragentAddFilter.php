<?php
/**
 * WPPingbackUseragentAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the user agent sent when pinging-back a URL.
 *
 * @since 2.9.0
 */
abstract class WPPingbackUseragentAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pingback_useragent';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param string $concat_useragent The user agent concatenated with ' -- WordPress/' and the WordPress version.
	 * @param string $useragent The useragent.
	 * @param string $pingback_server_url The server URL being linked to.
	 * @param string $pagelinkedto URL of page linked to.
	 * @param string $pagelinkedfrom URL of page linked from.
	 */
	abstract public function execute( $concat_useragent, $useragent, $pingback_server_url, $pagelinkedto, $pagelinkedfrom );
}
