<?php
/**
 * WPRenderBlockCoreNavigationLinkAllowedPostStatusAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filter allowed post_status for navigation link block to render.
 *
 * @since 6.8.0
 */
abstract class WPRenderBlockCoreNavigationLinkAllowedPostStatusAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'render_block_core_navigation_link_allowed_post_status';

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
	 * @param array $post_status .
	 * @param array $attributes .
	 * @param \WP_Block $block .
	 */
	abstract public function execute( $post_status, $attributes, $block );
}
