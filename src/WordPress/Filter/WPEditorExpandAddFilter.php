<?php
/**
 * WPEditorExpandAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to enable the 'expand' functionality in the post editor.
 *
 * @since 4.0.0
 * @since 4.1.0 Added the `$post_type` parameter.
 */
abstract class WPEditorExpandAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_editor_expand';

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
	 * @param bool $expand Whether to enable the 'expand' functionality. Default true.
	 * @param string $post_type Post type.
	 */
	abstract public function execute( $expand, $post_type );
}
