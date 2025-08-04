<?php
/**
 * WPDoMetaBoxesAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires after meta boxes have been added.
 *
 * @since 3.0.0
 */
abstract class WPDoMetaBoxesAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'do_meta_boxes';

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
	 * @param string $post_type Post type of the post on Edit Post screen, 'link' on Edit Link screen, 'dashboard' on Dashboard screen.
	 * @param string $context Meta box context. Possible values include 'normal', 'advanced', 'side'.
	 * @param \WP_Post|object|string $post Post object on Edit Post screen, link object on Edit Link screen, an empty string on Dashboard screen.
	 */
	abstract public function execute( $post_type, $context, $post );
}
