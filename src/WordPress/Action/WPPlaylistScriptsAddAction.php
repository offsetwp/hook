<?php
/**
 * WPPlaylistScriptsAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Prints and enqueues playlist scripts, styles, and JavaScript templates.
 *
 * @since 3.9.0
 */
abstract class WPPlaylistScriptsAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_playlist_scripts';

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
	 * @param string $type Type of playlist. Possible values are 'audio' or 'video'.
	 * @param string $style The 'theme' for the playlist. Core provides 'light' and 'dark'.
	 */
	abstract public function execute( $type, $style );
}
