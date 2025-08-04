<?php
/**
 * WPFieldAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the value of a specific post field for display.
 *
 * @since 2.3.0
 */
abstract class WPFieldAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = '{$field}';

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
	 * @param mixed $value Value of the prefixed post field.
	 * @param int $post_id Post ID.
	 * @param string $context Context for how to sanitize the field. Accepts 'raw', 'edit', 'db', 'display', 'attribute', or 'js'. Default 'display'.
	 */
	abstract public function execute( $value, $post_id, $context );
}
