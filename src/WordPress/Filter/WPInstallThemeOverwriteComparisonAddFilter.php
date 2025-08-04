<?php
/**
 * WPInstallThemeOverwriteComparisonAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the compare table output for overwriting a theme package on upload.
 *
 * @since 5.5.0
 */
abstract class WPInstallThemeOverwriteComparisonAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'install_theme_overwrite_comparison';

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
	 * @param string $table The output table with Name, Version, Author, RequiresWP, and RequiresPHP info.
	 * @param \WP_Theme $current_theme_data Active theme data.
	 * @param array $new_theme_data Array with uploaded theme data.
	 */
	abstract public function execute( $table, $current_theme_data, $new_theme_data );
}
