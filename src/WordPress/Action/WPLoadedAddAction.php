<?php
/**
 * WPLoadedAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * This hook is fired once WP, all plugins, and the theme are fully loaded and instantiated.
 *
 * @link  https://developer.wordpress.org/plugins/javascript/ajax
 *
 * @since 3.0.0
 */
abstract class WPLoadedAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_loaded';

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
	public int $hook_accepted_args = 0;


	/**
	 * The hook execution method
	 */
	abstract public function execute();
}
