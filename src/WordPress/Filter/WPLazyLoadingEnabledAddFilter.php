<?php
/**
 * WPLazyLoadingEnabledAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to add the `loading` attribute to the specified tag in the specified context.
 *
 * @since 5.5.0
 */
abstract class WPLazyLoadingEnabledAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_lazy_loading_enabled';

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
	 * @param bool $default Default value.
	 * @param string $tag_name The tag name.
	 * @param string $context Additional context, like the current filter name or the function name from where this was called.
	 */
	abstract public function execute( $default, $tag_name, $context );
}
