<?php
/**
 * WPAdjacentPostLinkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the adjacent post link.
 *
 * @since 2.6.0
 * @since 4.2.0 Added the `$adjacent` parameter.
 */
abstract class WPAdjacentPostLinkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = '{$adjacent}_post_link';

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
	 * @param string $output The adjacent post link.
	 * @param string $format Link anchor format.
	 * @param string $link Link permalink format.
	 * @param \WP_Post|string $post The adjacent post. Empty string if no corresponding post exists.
	 * @param string $adjacent Whether the post is previous or next.
	 */
	abstract public function execute( $output, $format, $link, $post, $adjacent );
}
