<?php
/**
 * WPPreWpGetHttpsDetectionErrorsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Short-circuits the process of detecting errors related to HTTPS support.
 *
 * @since 6.4.0
 */
abstract class WPPreWpGetHttpsDetectionErrorsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_wp_get_https_detection_errors';

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
	 * @param null|\WP_Error $pre Error object to short-circuit detection, or null to continue with the default behavior.
	 */
	abstract public function execute( $pre );
}
