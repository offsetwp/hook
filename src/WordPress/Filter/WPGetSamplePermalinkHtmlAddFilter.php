<?php
/**
 * WPGetSamplePermalinkHtmlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the sample permalink HTML markup.
 *
 * @since 2.9.0
 * @since 4.4.0 Added `$post` parameter.
 */
abstract class WPGetSamplePermalinkHtmlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_sample_permalink_html';

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
	 * @param string $return Sample permalink HTML markup.
	 * @param int $post_id Post ID.
	 * @param string|null $new_title New sample permalink title.
	 * @param string|null $new_slug New sample permalink slug.
	 * @param \WP_Post $post Post object.
	 */
	abstract public function execute( $return, $post_id, $new_title, $new_slug, $post );
}
