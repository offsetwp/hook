<?php
/**
 * WPEditableSlugAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the editable slug for a post or term.
 *
 * @since 2.6.0
 * @since 4.4.0 The `$tag` parameter was added.
 */
abstract class WPEditableSlugAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'editable_slug';

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
	 * @param string $slug The editable slug. Will be either a term slug or post URI depending upon the context in which it is evaluated.
	 * @param \WP_Term|\WP_Post $tag Term or post object.
	 */
	abstract public function execute( $slug, $tag );
}
