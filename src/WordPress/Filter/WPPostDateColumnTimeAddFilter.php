<?php
/**
 * WPPostDateColumnTimeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the published, scheduled, or unpublished time of the post.
 *
 * @since 2.5.1
 * @since 5.5.0 Removed the difference between 'excerpt' and 'list' modes. The published time and date are both displayed now, which is equivalent to the previous 'excerpt' mode.
 */
abstract class WPPostDateColumnTimeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'post_date_column_time';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param string $t_time The published time.
	 * @param \WP_Post $post Post object.
	 * @param string $column_name The column name.
	 * @param string $mode The list display mode ( 'excerpt' or 'list' ).
	 */
	abstract public function execute( $t_time, $post, $column_name, $mode );
}
