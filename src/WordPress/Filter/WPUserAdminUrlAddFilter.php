<?php
/**
 * WPUserAdminUrlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the user admin URL for the current user.
 *
 * @since 3.1.0
 * @since 5.8.0 The `$scheme` parameter was added.
 */
abstract class WPUserAdminUrlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'user_admin_url';

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
	 * @param string $url The complete URL including scheme and path.
	 * @param string $path Path relative to the URL. Blank string if no path is specified.
	 * @param string|null $scheme The scheme to use. Accepts 'http', 'https', 'admin', or null. Default is 'admin', which obeys force_ssl_admin() and is_ssl().
	 */
	abstract public function execute( $url, $path, $scheme );
}
