<?php
/**
 * WPRevisionTextDiffOptionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters revisions text diff options.
 *
 * @since 4.1.0
 */
abstract class WPRevisionTextDiffOptionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'revision_text_diff_options';

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
	 * @param array $args Associative array of options to pass to wp_text_diff().
	 * @param string $field The current revision field.
	 * @param \WP_Post $compare_from The revision post to compare from.
	 * @param \WP_Post $compare_to The revision post to compare to.
	 */
	abstract public function execute( $args, $field, $compare_from, $compare_to );
}
