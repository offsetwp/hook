<?php
/**
 * WPMsSiteNotFoundAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when a network can be determined but a site cannot.
 *
 * @since 3.9.0
 */
abstract class WPMsSiteNotFoundAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'ms_site_not_found';

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
	 * @param \WP_Network $current_site The network that had been determined.
	 * @param string $domain The domain used to search for a site.
	 * @param string $path The path used to search for a site.
	 */
	abstract public function execute( $current_site, $domain, $path );
}
