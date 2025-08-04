<?php
/**
 * WPPingbackPingSourceUriAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the pingback source URI.
 *
 * @since 3.6.0
 */
abstract class WPPingbackPingSourceUriAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pingback_ping_source_uri';

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
	 * @param string $pagelinkedfrom URI of the page linked from.
	 * @param string $pagelinkedto URI of the page linked to.
	 */
	abstract public function execute( $pagelinkedfrom, $pagelinkedto );
}
