<?php
/**
 * WPGetSamplePermalinkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the sample permalink.
 *
 * @since 4.4.0
 */
abstract class WPGetSamplePermalinkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_sample_permalink';

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
	 * @param array $permalink Array containing the sample permalink with placeholder for the post name, and the post name.
	 * @param int $post_id Post ID.
	 * @param string $title Post title.
	 * @param string $name Post name ( slug ).
	 * @param \WP_Post $post Post object.
	 */
	abstract public function execute( $permalink, $post_id, $title, $name, $post );
}
