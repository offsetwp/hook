<?php
/**
 * WPFsFtpConnectionTypesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the connection types to output to the filesystem credentials form.
 *
 * @since 2.9.0
 * @since 4.6.0 The `$context` parameter default changed from `false` to an empty string.
 */
abstract class WPFsFtpConnectionTypesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'fs_ftp_connection_types';

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
	 * @param string[] $types Types of connections.
	 * @param array $credentials Credentials to connect with.
	 * @param string $type Chosen filesystem method.
	 * @param bool|\WP_Error $error Whether the current request has failed to connect, or an error object.
	 * @param string $context Full path to the directory that is tested for being writable.
	 */
	abstract public function execute( $types, $credentials, $type, $error, $context );
}
