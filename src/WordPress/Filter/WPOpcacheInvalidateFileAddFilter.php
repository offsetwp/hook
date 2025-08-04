<?php
/**
 * WPOpcacheInvalidateFileAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to invalidate a file from the opcode cache.
 *
 * @since 5.5.0
 */
abstract class WPOpcacheInvalidateFileAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_opcache_invalidate_file';

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
	 * @param bool $will_invalidate Whether WordPress will invalidate <code>$filepath</code>. Default true.
	 * @param string $filepath The path to the PHP file to invalidate.
	 */
	abstract public function execute( $will_invalidate, $filepath );
}
