<?php
/**
 * WPPostClassTaxonomiesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the taxonomies to generate classes for each individual term.
 *
 * @since 6.1.0
 */
abstract class WPPostClassTaxonomiesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'post_class_taxonomies';

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
	 * @param string[] $taxonomies List of all taxonomy names to generate classes for.
	 * @param int $post_id The post ID.
	 * @param string[] $classes An array of post class names.
	 * @param string[] $css_class An array of additional class names added to the post.
	 */
	abstract public function execute( $taxonomies, $post_id, $classes, $css_class );
}
