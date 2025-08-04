<?php
/**
 * WPWpPostRevisionFieldsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of fields saved in post revisions.
 *
 * @since 2.6.0
 * @since 4.5.0 The `$post` parameter was added.
 */
abstract class WPWpPostRevisionFieldsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = '_wp_post_revision_fields';

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
	 * @param string[] $fields List of fields to revision. Contains 'post_title', 'post_content', and 'post_excerpt' by default.
	 * @param array $post A post array being processed for insertion as a post revision.
	 */
	abstract public function execute( $fields, $post );
}
