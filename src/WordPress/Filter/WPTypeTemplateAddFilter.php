<?php
/**
 * WPTypeTemplateAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the path of the queried template by type.
 *
 * @since 1.5.0
 * @since 4.8.0 The `$type` and `$templates` parameters were added.
 */
abstract class WPTypeTemplateAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = '{$type}_template';

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
	 * @param string $template Path to the template. See locate_template().
	 * @param string $type Sanitized filename without extension.
	 * @param string[] $templates A list of template candidates, in descending order of priority.
	 */
	abstract public function execute( $template, $type, $templates );
}
