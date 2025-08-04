<?php
/**
 * WPCustomizeChangesetBranchingAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether or not changeset branching is allowed.
 *
 * @since 4.9.0
 */
abstract class WPCustomizeChangesetBranchingAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_changeset_branching';

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
	 * @param bool $allow_branching Whether branching is allowed. If <code>false</code>, the default, then only one saved changeset exists at a time.
	 * @param \WP_Customize_Manager $wp_customize Manager instance.
	 */
	abstract public function execute( $allow_branching, $wp_customize );
}
