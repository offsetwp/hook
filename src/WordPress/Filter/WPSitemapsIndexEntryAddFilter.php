<?php
/**
 * WPSitemapsIndexEntryAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the sitemap entry for the sitemap index.
 *
 * @since 5.5.0
 */
abstract class WPSitemapsIndexEntryAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_sitemaps_index_entry';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param array $sitemap_entry Sitemap entry for the post.
	 * @param string $object_type Object empty name.
	 * @param string $object_subtype Object subtype name. Empty string if the object type does not support subtypes.
	 * @param int $page Page number of results.
	 */
	abstract public function execute( $sitemap_entry, $object_type, $object_subtype, $page );
}
