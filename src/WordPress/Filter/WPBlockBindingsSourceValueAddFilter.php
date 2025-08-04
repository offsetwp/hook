<?php
/**
 * WPBlockBindingsSourceValueAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the output of a block bindings source.
 *
 * @since 6.7.0
 */
abstract class WPBlockBindingsSourceValueAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'block_bindings_source_value';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param mixed $value The computed value for the source.
	 * @param string $name The name of the source.
	 * @param array $source_args Array containing source arguments used to look up the override value, i.e. { "key": "foo" }.
	 * @param \WP_Block $block_instance The block instance.
	 * @param string $attribute_name The name of an attribute.
	 */
	abstract public function execute( $value, $name, $source_args, $block_instance, $attribute_name );
}
