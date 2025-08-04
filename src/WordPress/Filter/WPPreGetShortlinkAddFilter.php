<?php
/**
 * WPPreGetShortlinkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to preempt generating a shortlink for the given post.
 *
 * @since 3.0.0
 */
abstract class WPPreGetShortlinkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_get_shortlink';

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
	 * @param false|string $return Short-circuit return value. Either false or a URL string.
	 * @param int $id Post ID, or 0 for the current post.
	 * @param string $context The context for the link. One of 'post' or 'query',.
	 * @param bool $allow_slugs Whether to allow post slugs in the shortlink.
	 */
	abstract public function execute( $return, $id, $context, $allow_slugs );
}
