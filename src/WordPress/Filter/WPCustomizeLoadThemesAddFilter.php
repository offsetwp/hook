<?php
/**
 * WPCustomizeLoadThemesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the theme data loaded in the customizer.
 *
 * @since 4.9.0
 *
 * @see wp_prepare_themes_for_js()
 * @see themes_api()
 * @see WP_Customize_Manager::__construct()
 */
abstract class WPCustomizeLoadThemesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_load_themes';

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
	 * @param array|\stdClass $themes Nested array or object of theme data.
	 * @param array $args List of arguments, such as page, search term, and tags to query for.
	 * @param \WP_Customize_Manager $manager Instance of Customize manager.
	 */
	abstract public function execute( $themes, $args, $manager );
}
