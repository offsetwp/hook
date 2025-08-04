<?php
/**
 * WPLanguageAttributesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the language attributes for display in the 'html' tag.
 *
 * @since 2.5.0
 * @since 4.3.0 Added the `$doctype` parameter.
 */
abstract class WPLanguageAttributesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'language_attributes';

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
	 * @param string $output A space-separated list of language attributes.
	 * @param string $doctype The type of HTML document ( xhtml|html ).
	 */
	abstract public function execute( $output, $doctype );
}
