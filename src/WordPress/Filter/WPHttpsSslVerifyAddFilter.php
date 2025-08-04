<?php
/**
 * WPHttpsSslVerifyAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether SSL should be verified for non-local requests.
 *
 * @since 2.8.0
 * @since 5.1.0 The `$url` parameter was added.
 */
abstract class WPHttpsSslVerifyAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'https_ssl_verify';

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
	 * @param bool|string $ssl_verify Boolean to control whether to verify the SSL connection or path to an SSL certificate.
	 * @param string $url The request URL.
	 */
	abstract public function execute( $ssl_verify, $url );
}
