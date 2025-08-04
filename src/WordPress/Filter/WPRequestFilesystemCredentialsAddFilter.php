<?php
/**
 * WPRequestFilesystemCredentialsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the filesystem credentials.
 *
 * @since 2.5.0
 * @since 4.6.0 The `$context` parameter default changed from `false` to an empty string.
 */
abstract class WPRequestFilesystemCredentialsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'request_filesystem_credentials';

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
	public int $hook_accepted_args = 7;


	/**
	 * The hook execution method
	 *
	 * @param mixed $credentials Credentials to return instead. Default empty string.
	 * @param string $form_post The URL to post the form to.
	 * @param string $type Chosen type of filesystem.
	 * @param bool|\WP_Error $error Whether the current request has failed to connect, or an error object.
	 * @param string $context Full path to the directory that is tested for being writable.
	 * @param array $extra_fields Extra POST fields.
	 * @param bool $allow_relaxed_file_ownership Whether to allow Group/World writable.
	 */
	abstract public function execute(
		$credentials,
		$form_post,
		$type,
		$error,
		$context,
		$extra_fields,
		$allow_relaxed_file_ownership,
	);
}
