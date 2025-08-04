<?php
/**
 * WPPrePrepareThemesForJsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters theme data before it is prepared for JavaScript.
 *
 * @since 4.2.0
 */
abstract class WPPrePrepareThemesForJsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_prepare_themes_for_js';

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
	 * @param array $prepared_themes An associative array of theme data. Default empty array.
	 * @param \WP_Theme[]|null $themes An array of theme objects to prepare, if any.
	 * @param string $current_theme The active theme slug.
	 */
	abstract public function execute( $prepared_themes, $themes, $current_theme );
}
