<?php
/**
 * WPActionPrefilterAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the data for a file before it is uploaded to WordPress.
 *
 * @since 2.9.0 as 'wp_handle_upload_prefilter'.
 * @since 4.0.0 Converted to a dynamic hook with `$action`.
 */
abstract class WPActionPrefilterAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = '{$action}_prefilter';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param array $file Reference to a single element from <code>$_FILES</code>.
	 */
	abstract public function execute( $file );
}
