<?php
/**
 * WPDebugInformationAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the debug information shown on the Tools -> Site Health -> Info screen.
 *
 * @since 5.2.0
 */
abstract class WPDebugInformationAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'debug_information';

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
	 * @param array $args The debug information to be added to the core information page. This is an associative multi-dimensional array, up to three levels deep. The topmost array holds the sections, keyed by section ID.
	 */
	abstract public function execute( $args );
}
