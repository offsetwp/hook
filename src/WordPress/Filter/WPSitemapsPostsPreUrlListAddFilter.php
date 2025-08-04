<?php
/**
 * WPSitemapsPostsPreUrlListAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the posts URL list before it is generated.
 *
 * @since 5.5.0
 */
abstract class WPSitemapsPostsPreUrlListAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_sitemaps_posts_pre_url_list';

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
	public int $hook_accepted_args = 3;


	/**
	 * The hook execution method
	 *
	 * @param array[]|null $url_list The URL list. Default null.
	 * @param string $post_type Post type name.
	 * @param int $page_num Page of results.
	 */
	abstract public function execute( $url_list, $post_type, $page_num );
}
