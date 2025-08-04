<?php
/**
 * WPTaxonomyFeedLinkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the feed link for a taxonomy other than 'category' or 'post_tag'.
 *
 * @since 3.0.0
 */
abstract class WPTaxonomyFeedLinkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'taxonomy_feed_link';

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
	 * @param string $link The taxonomy feed link.
	 * @param string $feed Feed type. Possible values include 'rss2', 'atom'.
	 * @param string $taxonomy The taxonomy name.
	 */
	abstract public function execute( $link, $feed, $taxonomy );
}
