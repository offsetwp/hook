<?php
/**
 * WPTheCategoryRssAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters all of the post categories for display in a feed.
 *
 * @since 1.2.0
 */
abstract class WPTheCategoryRssAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'the_category_rss';

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
	 * @param string $the_list All of the RSS post categories.
	 * @param string $type Type of feed. Possible values include 'rss2', 'atom'. Default 'rss2'.
	 */
	abstract public function execute( $the_list, $type );
}
