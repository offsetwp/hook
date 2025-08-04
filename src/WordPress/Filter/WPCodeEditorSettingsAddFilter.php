<?php
/**
 * WPCodeEditorSettingsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters settings that are passed into the code editor.
 *
 * @since 4.9.0
 */
abstract class WPCodeEditorSettingsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_code_editor_settings';

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
	 * @param array $settings The array of settings passed to the code editor. A falsey value disables the editor.
	 * @param array $args Args passed when calling <code>get_code_editor_settings()</code>.
	 */
	abstract public function execute( $settings, $args );
}
