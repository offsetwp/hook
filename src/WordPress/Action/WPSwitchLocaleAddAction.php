<?php
/**
 * WPSwitchLocaleAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when the locale is switched.
 *
 * @since 4.7.0
 * @since 6.2.0 The `$user_id` parameter was added.
 */
abstract class WPSwitchLocaleAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'switch_locale';

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
	 * @param string $locale The new locale.
	 * @param false|int $user_id User ID for context if available.
	 */
	abstract public function execute( $locale, $user_id );
}
