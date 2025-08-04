<?php
/**
 * WPWpPostRevisionFieldFieldAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Contextually filter a post revision field.
 *
 * @since 3.6.0
 */
abstract class WPWpPostRevisionFieldFieldAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = '_wp_post_revision_field_{$field}';

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
	 * @param string $revision_field The current revision field to compare to or from.
	 * @param string $field The current revision field.
	 * @param \WP_Post $compare_from The revision post object to compare to or from.
	 * @param string $context The context of whether the current revision is the old or the new one. Either 'to' or 'from'.
	 */
	abstract public function execute( $revision_field, $field, $compare_from, $context );
}
