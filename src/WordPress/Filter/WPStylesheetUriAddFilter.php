<?php
/**
 * WPStylesheetUriAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the URI of the active theme stylesheet.
 *
 * @since 1.5.0
 */
abstract class WPStylesheetUriAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'stylesheet_uri';

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
	 * @param string $stylesheet_uri Stylesheet URI for the active theme/child theme.
	 * @param string $stylesheet_dir_uri Stylesheet directory URI for the active theme/child theme.
	 */
	abstract public function execute( $stylesheet_uri, $stylesheet_dir_uri );
}
