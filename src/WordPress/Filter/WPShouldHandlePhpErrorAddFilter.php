<?php
/**
 * WPShouldHandlePhpErrorAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether a given thrown error should be handled by the fatal error handler.
 *
 * @since 5.2.0
 */
abstract class WPShouldHandlePhpErrorAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_should_handle_php_error';

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
	 * @param bool $should_handle_error Whether the error should be handled by the fatal error handler.
	 * @param array $error Error information retrieved from <code>error_get_last()</code>.
	 */
	abstract public function execute( $should_handle_error, $error );
}
