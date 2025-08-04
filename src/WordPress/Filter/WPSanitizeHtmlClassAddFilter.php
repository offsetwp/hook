<?php
/**
 * WPSanitizeHtmlClassAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a sanitized HTML class string.
 *
 * @since 2.8.0
 */
abstract class WPSanitizeHtmlClassAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'sanitize_html_class';

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
	 * @param string $sanitized The sanitized HTML class.
	 * @param string $classname HTML class before sanitization.
	 * @param string $fallback The fallback string.
	 */
	abstract public function execute( $sanitized, $classname, $fallback );
}
