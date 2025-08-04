<?php
/**
 * WPStylesheetDirectoryUriAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the stylesheet directory URI.
 *
 * @since 1.5.0
 */
abstract class WPStylesheetDirectoryUriAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'stylesheet_directory_uri';

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
	 * @param string $stylesheet_dir_uri Stylesheet directory URI.
	 * @param string $stylesheet Name of the activated theme's directory.
	 * @param string $theme_root_uri Themes root URI.
	 */
	abstract public function execute( $stylesheet_dir_uri, $stylesheet, $theme_root_uri );
}
