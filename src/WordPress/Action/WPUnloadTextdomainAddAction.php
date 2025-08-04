<?php
/**
 * WPUnloadTextdomainAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires before the text domain is unloaded.
 *
 * @since 3.0.0
 * @since 6.1.0 Added the `$reloadable` parameter.
 */
abstract class WPUnloadTextdomainAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'unload_textdomain';

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
	 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
	 * @param bool $reloadable Whether the text domain can be loaded just-in-time again.
	 */
	abstract public function execute( $domain, $reloadable );
}
