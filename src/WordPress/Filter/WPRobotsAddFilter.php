<?php
/**
 * WPRobotsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the directives to be included in the 'robots' meta tag.
 *
 * @since 5.7.0
 */
abstract class WPRobotsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_robots';

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
	 * @param array $robots Associative array of directives. Every key must be the name of the directive, and the corresponding value must either be a string to provide as value for the directive or a boolean <code>true</code> if it is a boolean directive, i.e. without a value.
	 */
	abstract public function execute( $robots );
}
