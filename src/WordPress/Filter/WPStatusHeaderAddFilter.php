<?php
/**
 * WPStatusHeaderAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters an HTTP status header.
 *
 * @since 2.2.0
 */
abstract class WPStatusHeaderAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'status_header';

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
	 * @param string $status_header HTTP status header.
	 * @param int $code HTTP status code.
	 * @param string $description Description for the status code.
	 * @param string $protocol Server protocol.
	 */
	abstract public function execute( $status_header, $code, $description, $protocol );
}
