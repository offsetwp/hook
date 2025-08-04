<?php
/**
 * WPThemesApiArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters arguments used to query for installer pages from the WordPress.org Themes API.
 *
 * @since 2.8.0
 */
abstract class WPThemesApiArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'themes_api_args';

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
	 * @param object $args Arguments used to query for installer pages from the WordPress.org Themes API.
	 * @param string $action Requested action. Likely values are 'theme_information', 'feature_list', or 'query_themes'.
	 */
	abstract public function execute( $args, $action );
}
