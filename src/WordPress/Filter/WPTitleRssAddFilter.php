<?php
/**
 * WPTitleRssAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the blog title for display of the feed title.
 *
 * @since 2.2.0
 * @since 4.4.0 The `$sep` parameter was deprecated and renamed to `$deprecated`.
 *
 * @see get_wp_title_rss()
 */
abstract class WPTitleRssAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_title_rss';

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
	 * @param string $wp_title_rss The current blog title.
	 * @param string $deprecated Unused.
	 */
	abstract public function execute( $wp_title_rss, $deprecated );
}
