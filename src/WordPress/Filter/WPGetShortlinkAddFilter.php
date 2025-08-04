<?php
/**
 * WPGetShortlinkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the shortlink for a post.
 *
 * @since 3.0.0
 */
abstract class WPGetShortlinkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_shortlink';

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
	 * @param string $shortlink Shortlink URL.
	 * @param int $id Post ID, or 0 for the current post.
	 * @param string $context The context for the link. One of 'post' or 'query',.
	 * @param bool $allow_slugs Whether to allow post slugs in the shortlink. Not used by default.
	 */
	abstract public function execute( $shortlink, $id, $context, $allow_slugs );
}
