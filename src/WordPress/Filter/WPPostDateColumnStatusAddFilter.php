<?php
/**
 * WPPostDateColumnStatusAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the status text of the post.
 *
 * @since 4.8.0
 */
abstract class WPPostDateColumnStatusAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'post_date_column_status';

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
	 * @param string $status The status text.
	 * @param \WP_Post $post Post object.
	 * @param string $column_name The column name.
	 * @param string $mode The list display mode ( 'excerpt' or 'list' ).
	 */
	abstract public function execute( $status, $post, $column_name, $mode );
}
