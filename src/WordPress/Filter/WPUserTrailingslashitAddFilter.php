<?php
/**
 * WPUserTrailingslashitAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the trailing-slashed string, depending on whether the site is set to use trailing slashes.
 *
 * @since 2.2.0
 */
abstract class WPUserTrailingslashitAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'user_trailingslashit';

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
	 * @param string $url URL with or without a trailing slash.
	 * @param string $type_of_url The type of URL being considered. Accepts 'single', 'single_trackback', 'single_feed', 'single_paged', 'commentpaged', 'paged', 'home', 'feed', 'category', 'page', 'year', 'month', 'day', 'post_type_archive'.
	 */
	abstract public function execute( $url, $type_of_url );
}
