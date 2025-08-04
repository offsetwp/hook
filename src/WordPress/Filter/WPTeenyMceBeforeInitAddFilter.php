<?php
/**
 * WPTeenyMceBeforeInitAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the teenyMCE config before init.
 *
 * @since 2.7.0
 * @since 3.3.0 The `$editor_id` parameter was added.
 */
abstract class WPTeenyMceBeforeInitAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'teeny_mce_before_init';

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
	 * @param array $mce_init An array with teenyMCE config.
	 * @param string $editor_id Unique editor identifier, e.g. 'content'.
	 */
	abstract public function execute( $mce_init, $editor_id );
}
