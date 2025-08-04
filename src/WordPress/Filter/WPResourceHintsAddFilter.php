<?php
/**
 * WPResourceHintsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters domains and URLs for resource hints of the given relation type.
 *
 * @since 4.6.0
 * @since 4.7.0 The `$urls` parameter accepts arrays of specific HTML attributes as its child elements.
 */
abstract class WPResourceHintsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_resource_hints';

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
	 * @param array $urls Array of resources and their attributes, or URLs to print for resource hints.
	 * @param string $relation_type The relation type the URLs are printed for. One of 'dns-prefetch', 'preconnect', 'prefetch', or 'prerender'.
	 */
	abstract public function execute( $urls, $relation_type );
}
