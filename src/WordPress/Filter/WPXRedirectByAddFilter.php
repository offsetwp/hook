<?php
/**
 * WPXRedirectByAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the X-Redirect-By header.
 *
 * @since 5.1.0
 */
abstract class WPXRedirectByAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'x_redirect_by';

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
	 * @param string|false $x_redirect_by The application doing the redirect or false to omit the header.
	 * @param int $status Status code to use.
	 * @param string $location The path to redirect to.
	 */
	abstract public function execute( $x_redirect_by, $status, $location );
}
