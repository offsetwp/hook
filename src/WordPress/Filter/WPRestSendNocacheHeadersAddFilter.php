<?php
/**
 * WPRestSendNocacheHeadersAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to send no-cache headers on a REST API request.
 *
 * @since 4.4.0
 * @since 6.3.2 Moved the block to catch the filter added on rest_cookie_check_errors() from wp-includes/rest-api.php.
 */
abstract class WPRestSendNocacheHeadersAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_send_nocache_headers';

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
	 * @param bool $rest_send_nocache_headers Whether to send no-cache headers.
	 */
	abstract public function execute( $rest_send_nocache_headers );
}
