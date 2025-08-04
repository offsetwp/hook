<?php
/**
 * WPAuthorizeApplicationRedirectUrlInvalidProtocolsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of invalid protocols used in applications redirect URLs.
 *
 * @since 6.3.2
 */
abstract class WPAuthorizeApplicationRedirectUrlInvalidProtocolsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_authorize_application_redirect_url_invalid_protocols';

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
	 * @param string[] $bad_protocols Array of invalid protocols.
	 * @param string $url The redirect URL to be validated.
	 */
	abstract public function execute( $bad_protocols, $url );
}
