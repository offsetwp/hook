<?php
/**
 * WPUpdateThemesHostnameAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the update response for a given theme hostname.
 *
 * @since 6.1.0
 */
abstract class WPUpdateThemesHostnameAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'update_themes_{$hostname}';

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
	 * @param array $update The theme update data with the latest details. Default false.
	 * @param array $theme_data Theme headers.
	 * @param string $theme_stylesheet Theme stylesheet.
	 * @param string[] $locales Installed locales to look up translations for.
	 */
	abstract public function execute( $update, $theme_data, $theme_stylesheet, $locales );
}
