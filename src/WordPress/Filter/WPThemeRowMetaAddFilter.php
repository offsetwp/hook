<?php
/**
 * WPThemeRowMetaAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the array of row meta for each theme in the Multisite themes list table.
 *
 * @since 3.1.0
 */
abstract class WPThemeRowMetaAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'theme_row_meta';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param string[] $theme_meta An array of the theme's metadata, including the version, author, and theme URI.
	 * @param string $stylesheet Directory name of the theme.
	 * @param \WP_Theme $theme WP_Theme object.
	 * @param string $status Status of the theme.
	 */
	abstract public function execute( $theme_meta, $stylesheet, $theme, $status );
}
