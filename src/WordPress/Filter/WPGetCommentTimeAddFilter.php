<?php
/**
 * WPGetCommentTimeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the returned comment time.
 *
 * @since 1.5.0
 */
abstract class WPGetCommentTimeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_comment_time';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param string|int $comment_time The comment time, formatted as a date string or Unix timestamp.
	 * @param string $format PHP date format.
	 * @param bool $gmt Whether the GMT date is in use.
	 * @param bool $translate Whether the time is translated.
	 * @param \WP_Comment $comment The comment object.
	 */
	abstract public function execute( $comment_time, $format, $gmt, $translate, $comment );
}
