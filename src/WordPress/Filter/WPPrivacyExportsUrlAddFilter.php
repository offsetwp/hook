<?php
/**
 * WPPrivacyExportsUrlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the URL of the directory used to store personal data export files.
 *
 * @since 4.9.6
 * @since 5.5.0 Exports now use relative paths, so changes to the directory URL via this filter should be reflected on the server.
 */
abstract class WPPrivacyExportsUrlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_privacy_exports_url';

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
	 * @param string $exports_url Exports directory URL.
	 */
	abstract public function execute( $exports_url );
}
