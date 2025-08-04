<?php
/**
 * WPUniquePostSlugIsBadFlatSlugAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the post slug would be bad as a flat slug.
 *
 * @since 3.1.0
 */
abstract class WPUniquePostSlugIsBadFlatSlugAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_unique_post_slug_is_bad_flat_slug';

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
	 * @param bool $bad_slug Whether the post slug would be bad as a flat slug.
	 * @param string $slug The post slug.
	 * @param string $post_type Post type.
	 */
	abstract public function execute( $bad_slug, $slug, $post_type );
}
