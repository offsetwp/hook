<?php
/**
 * WPSiteByPathSegmentsCountAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the number of path segments to consider when searching for a site.
 *
 * @since 3.9.0
 */
abstract class WPSiteByPathSegmentsCountAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'site_by_path_segments_count';

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
	 * @param int|null $segments The number of path segments to consider. WordPress by default looks at one path segment following the network path. The function default of null only makes sense when you know the requested path should match a site.
	 * @param string $domain The requested domain.
	 * @param string $path The requested path, in full.
	 */
	abstract public function execute( $segments, $domain, $path );
}
