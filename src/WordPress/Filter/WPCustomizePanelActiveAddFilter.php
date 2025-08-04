<?php
/**
 * WPCustomizePanelActiveAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters response of WP_Customize_Panel::active().
 *
 * @since 4.1.0
 */
abstract class WPCustomizePanelActiveAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_panel_active';

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
	 * @param bool $active Whether the Customizer panel is active.
	 * @param \WP_Customize_Panel $panel WP_Customize_Panel instance.
	 */
	abstract public function execute( $active, $panel );
}
