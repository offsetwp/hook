<?php
/**
 * WPPostLinkCategoryAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the category that gets used in the %category% permalink token.
 *
 * @since 3.5.0
 */
abstract class WPPostLinkCategoryAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'post_link_category';

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
	 * @param \WP_Term $cat The category to use in the permalink.
	 * @param array $cats Array of all categories ( WP_Term objects ) associated with the post.
	 * @param \WP_Post $post The post in question.
	 */
	abstract public function execute( $cat, $cats, $post );
}
