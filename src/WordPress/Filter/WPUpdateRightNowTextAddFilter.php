<?php
/**
 * WPUpdateRightNowTextAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the text displayed in the 'At a Glance' dashboard widget.
 *
 * @since 4.4.0
 */
abstract class WPUpdateRightNowTextAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'update_right_now_text';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param string $content Default text.
	 */
	abstract public function execute( $content );
}
