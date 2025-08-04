<?php
/**
 * WPAutoThemeUpdateSendEmailAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to send an email following an automatic background theme update.
 *
 * @since 5.5.0
 * @since 5.5.1 Added the `$update_results` parameter.
 */
abstract class WPAutoThemeUpdateSendEmailAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'auto_theme_update_send_email';

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
	 * @param bool $enabled True if theme update notifications are enabled, false otherwise.
	 * @param array $update_results The results of theme update tasks.
	 */
	abstract public function execute( $enabled, $update_results );
}
