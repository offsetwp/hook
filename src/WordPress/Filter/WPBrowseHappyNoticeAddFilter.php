<?php
/**
 * WPBrowseHappyNoticeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the notice output for the 'Browse Happy' nag meta box.
 *
 * @since 3.2.0
 */
abstract class WPBrowseHappyNoticeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'browse-happy-notice';

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
	 * @param string $notice The notice content.
	 * @param array|false $response An array containing web browser information, or false on failure. See wp_check_browser_version().
	 */
	abstract public function execute( $notice, $response );
}
