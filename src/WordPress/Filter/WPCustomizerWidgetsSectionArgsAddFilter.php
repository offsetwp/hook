<?php
/**
 * WPCustomizerWidgetsSectionArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters Customizer widget section arguments for a given sidebar.
 *
 * @since 3.9.0
 */
abstract class WPCustomizerWidgetsSectionArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customizer_widgets_section_args';

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
	public int $hook_accepted_args = 3;


	/**
	 * The hook execution method
	 *
	 * @param array $section_args Array of Customizer widget section arguments.
	 * @param string $section_id Customizer section ID.
	 * @param int|string $sidebar_id Sidebar ID.
	 */
	abstract public function execute( $section_args, $section_id, $sidebar_id );
}
