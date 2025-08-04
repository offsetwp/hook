<?php
/**
 * WPGetRevisionUiDiffAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the fields displayed in the post revision diff UI.
 *
 * @since 4.1.0
 */
abstract class WPGetRevisionUiDiffAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_get_revision_ui_diff';

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
	 * @param array[] $return Array of revision UI fields. Each item is an array of id, name, and diff.
	 * @param \WP_Post $compare_from The revision post to compare from.
	 * @param \WP_Post $compare_to The revision post to compare to.
	 */
	abstract public function execute( $return, $compare_from, $compare_to );
}
