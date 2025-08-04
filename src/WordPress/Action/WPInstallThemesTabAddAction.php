<?php
/**
 * WPInstallThemesTabAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires at the top of each of the tabs on the Install Themes page.
 *
 * @since 2.8.0
 * @since 6.1.0 Added the `install_themes_block-themes` hook name.
 */
abstract class WPInstallThemesTabAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'install_themes_{$tab}';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param int $paged Number of the current page of results being viewed.
	 */
	abstract public function execute( $paged );
}
