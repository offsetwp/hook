<?php
/**
 * WPFilesystemMethodAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the filesystem method to use.
 *
 * @since 2.6.0
 */
abstract class WPFilesystemMethodAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'filesystem_method';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param string $method Filesystem method to return.
	 * @param array $args An array of connection details for the method.
	 * @param string $context Full path to the directory that is tested for being writable.
	 * @param bool $allow_relaxed_file_ownership Whether to allow Group/World writable.
	 */
	abstract public function execute( $method, $args, $context, $allow_relaxed_file_ownership );
}
