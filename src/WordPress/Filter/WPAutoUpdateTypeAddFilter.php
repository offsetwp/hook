<?php
/**
 * WPAutoUpdateTypeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to automatically update core, a plugin, a theme, or a language.
 *
 * @since 3.7.0
 * @since 5.5.0 The `$update` parameter accepts the value of null.
 */
abstract class WPAutoUpdateTypeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'auto_update_{$type}';

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
	 * @param bool|null $update Whether to update. The value of null is internally used to detect whether nothing has hooked into this filter.
	 * @param object $item The update offer.
	 */
	abstract public function execute( $update, $item );
}
