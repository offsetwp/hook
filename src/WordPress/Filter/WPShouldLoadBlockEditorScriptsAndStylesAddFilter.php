<?php
/**
 * WPShouldLoadBlockEditorScriptsAndStylesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the flag that decides whether or not block editor scripts and styles are going to be enqueued on the current screen.
 *
 * @since 5.6.0
 */
abstract class WPShouldLoadBlockEditorScriptsAndStylesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'should_load_block_editor_scripts_and_styles';

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
	 * @param bool $is_block_editor_screen Current value of the flag.
	 */
	abstract public function execute( $is_block_editor_screen );
}
