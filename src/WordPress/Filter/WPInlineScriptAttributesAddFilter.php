<?php
/**
 * WPInlineScriptAttributesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters attributes to be added to a script tag.
 *
 * @since 5.7.0
 */
abstract class WPInlineScriptAttributesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_inline_script_attributes';

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
	 * @param array $attributes Key-value pairs representing <code>&lt;script&gt;</code> tag attributes. Only the attribute name is added to the <code>&lt;script&gt;</code> tag for entries with a boolean value, and that are true.
	 * @param string $data Inline data.
	 */
	abstract public function execute( $attributes, $data );
}
