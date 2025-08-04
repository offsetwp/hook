<?php
/**
 * WPGetBloginfoRssAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the bloginfo for use in RSS feeds.
 *
 * @since 2.2.0
 *
 * @see convert_chars()
 * @see get_bloginfo()
 */
abstract class WPGetBloginfoRssAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_bloginfo_rss';

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
	 * @param string $info Converted string value of the blog information.
	 * @param string $show The type of blog information to retrieve.
	 */
	abstract public function execute( $info, $show );
}
