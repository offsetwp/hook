<?php
/**
 * WPPreKsesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters content to be run through KSES.
 *
 * @since 2.3.0
 */
abstract class WPPreKsesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_kses';

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
	public int $hook_accepted_args = 3;


	/**
	 * The hook execution method
	 *
	 * @param string $content Content to filter through KSES.
	 * @param array[]|string $allowed_html An array of allowed HTML elements and attributes, or a context name such as 'post'. See wp_kses_allowed_html() for the list of accepted context names.
	 * @param string[] $allowed_protocols Array of allowed URL protocols.
	 */
	abstract public function execute( $content, $allowed_html, $allowed_protocols );
}
