<?php
/**
 * WPUseBlockEditorForPostTypeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether a post is able to be edited in the block editor.
 *
 * @since 5.0.0
 */
abstract class WPUseBlockEditorForPostTypeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'use_block_editor_for_post_type';

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
	 * @param bool $use_block_editor Whether the post type can be edited or not. Default true.
	 * @param string $post_type The post type being checked.
	 */
	abstract public function execute( $use_block_editor, $post_type );
}
