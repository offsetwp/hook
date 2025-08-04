<?php
/**
 * WPThemeAutoUpdateSettingHtmlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the HTML of the auto-updates setting for each theme in the Themes list table.
 *
 * @since 5.5.0
 */
abstract class WPThemeAutoUpdateSettingHtmlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'theme_auto_update_setting_html';

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
	 * @param string $html The HTML for theme's auto-update setting, including toggle auto-update action link and time to next update.
	 * @param string $stylesheet Directory name of the theme.
	 * @param \WP_Theme $theme WP_Theme object.
	 */
	abstract public function execute( $html, $stylesheet, $theme );
}
