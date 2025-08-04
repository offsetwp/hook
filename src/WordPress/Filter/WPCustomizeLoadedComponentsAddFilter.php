<?php
/**
 * WPCustomizeLoadedComponentsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the core Customizer components to load.
 *
 * @since 4.4.0
 *
 * @see WP_Customize_Manager::__construct()
 */
abstract class WPCustomizeLoadedComponentsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_loaded_components';

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
	 * @param string[] $components Array of core components to load.
	 * @param \WP_Customize_Manager $manager WP_Customize_Manager instance.
	 */
	abstract public function execute( $components, $manager );
}
