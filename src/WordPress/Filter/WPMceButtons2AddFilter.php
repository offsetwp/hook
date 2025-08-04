<?php
/**
 * WPMceButtons2AddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the second-row list of TinyMCE buttons ( Visual tab ).
 *
 * @since 2.0.0
 * @since 3.3.0 The `$editor_id` parameter was added.
 */
abstract class WPMceButtons2AddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'mce_buttons_2';

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
	 * @param array $mce_buttons_2 Second-row list of buttons.
	 * @param string $editor_id Unique editor identifier, e.g. 'content'. Accepts 'classic-block' when called from block editor's Classic block.
	 */
	abstract public function execute( $mce_buttons_2, $editor_id );
}
