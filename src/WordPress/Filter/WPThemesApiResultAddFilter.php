<?php
/**
 * WPThemesApiResultAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the returned WordPress.org Themes API response.
 *
 * @since 2.8.0
 */
abstract class WPThemesApiResultAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'themes_api_result';

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
	 * @param array|\stdClass|\WP_Error $res WordPress.org Themes API response.
	 * @param string $action Requested action. Likely values are 'theme_information', 'feature_list', or 'query_themes'.
	 * @param \stdClass $args Arguments used to query for installer pages from the WordPress.org Themes API.
	 */
	abstract public function execute( $res, $action, $args );
}
