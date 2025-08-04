<?php
/**
 * WPCommentCookieLifetimeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the lifetime of the comment cookie in seconds.
 *
 * @since 2.8.0
 * @since 6.6.0 The default $seconds value changed from 30000000 to YEAR_IN_SECONDS.
 */
abstract class WPCommentCookieLifetimeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'comment_cookie_lifetime';

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
	 * @param int $seconds Comment cookie lifetime. Default YEAR_IN_SECONDS.
	 */
	abstract public function execute( $seconds );
}
