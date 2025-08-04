<?php
/**
 * WPSiteStatusAutoloadedOptionsActionToPerformAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters actionable information to tackle the problem. It can be a link to an external guide.
 *
 * @since 6.6.0
 */
abstract class WPSiteStatusAutoloadedOptionsActionToPerformAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'site_status_autoloaded_options_action_to_perform';

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
	 * @param string $actions Call to Action to be used to point to the right direction to solve the issue.
	 */
	abstract public function execute( $actions );
}
