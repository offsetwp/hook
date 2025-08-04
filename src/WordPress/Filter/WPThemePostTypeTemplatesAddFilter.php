<?php
/**
 * WPThemePostTypeTemplatesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters list of page templates for a theme.
 *
 * @since 3.9.0
 * @since 4.4.0 Converted to allow complete control over the `$page_templates` array.
 * @since 4.7.0 Added the `$post_type` parameter.
 */
abstract class WPThemePostTypeTemplatesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'theme_{$post_type}_templates';

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
	 * @param string[] $post_templates Array of template header names keyed by the template file name.
	 * @param \WP_Theme $theme The theme object.
	 * @param \WP_Post|null $post The post being edited, provided for context, or null.
	 * @param string $post_type Post type to get the templates for.
	 */
	abstract public function execute( $post_templates, $theme, $post, $post_type );
}
