<?php
/**
 * WPMediaRowActionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the action links for each attachment in the Media list table.
 *
 * @since 2.8.0
 */
abstract class WPMediaRowActionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'media_row_actions';

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
	 * @param string[] $actions An array of action links for each attachment. Includes 'Edit', 'Delete Permanently', 'View', 'Copy URL' and 'Download file'.
	 * @param \WP_Post $post WP_Post object for the current attachment.
	 * @param bool $detached Whether the list table contains media not attached to any posts. Default true.
	 */
	abstract public function execute( $actions, $post, $detached );
}
