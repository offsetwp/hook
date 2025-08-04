<?php
/**
 * WPUpdateCustomCssDataAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the `css` ( `post_content` ) and `preprocessed` ( `post_content_filtered` ) args for a `custom_css` post being updated.
 *
 * @since 4.7.0
 */
abstract class WPUpdateCustomCssDataAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'update_custom_css_data';

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
	 * @param array $data Custom CSS data.
	 * @param array $args The args passed into <code>wp_update_custom_css_post()</code> merged with defaults.
	 */
	abstract public function execute( $data, $args );
}
