<?php
/**
 * WPLoginUrlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the login URL.
 *
 * @since 2.8.0
 * @since 4.2.0 The `$force_reauth` parameter was added.
 */
abstract class WPLoginUrlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'login_url';

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
	 * @param string $login_url The login URL. Not HTML-encoded.
	 * @param string $redirect The path to redirect to on login, if supplied.
	 * @param bool $force_reauth Whether to force reauthorization, even if a cookie is present.
	 */
	abstract public function execute( $login_url, $redirect, $force_reauth );
}
