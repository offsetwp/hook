<?php
/**
 * WPAutoPluginThemeUpdateEmailAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the email sent following an automatic background update for plugins and themes.
 *
 * @since 5.5.0
 */
abstract class WPAutoPluginThemeUpdateEmailAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'auto_plugin_theme_update_email';

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
	 * @param array $email Array of email arguments that will be passed to wp_mail().
	 * @param string $type The type of email being sent. Can be one of 'success', 'fail', 'mixed'.
	 * @param array $successful_updates A list of updates that succeeded.
	 * @param array $failed_updates A list of updates that failed.
	 */
	abstract public function execute( $email, $type, $successful_updates, $failed_updates );
}
