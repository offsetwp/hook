<?php
/**
 * WPMediaDateColumnTimeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the published time of an attachment displayed in the Media list table.
 *
 * @since 6.0.0
 */
abstract class WPMediaDateColumnTimeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'media_date_column_time';

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
	 * @param string $h_time The published time.
	 * @param \WP_Post $post Attachment object.
	 * @param string $column_name The column name.
	 */
	abstract public function execute( $h_time, $post, $column_name );
}
