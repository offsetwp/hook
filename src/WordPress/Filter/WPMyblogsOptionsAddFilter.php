<?php
/**
 * WPMyblogsOptionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the settings HTML markup in the Global Settings section on the My Sites screen.
 *
 * @since MU ( 3.0.0 ) MU ( 3.0.0 )
 */
abstract class WPMyblogsOptionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'myblogs_options';

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
	 * @param string $settings_html The settings HTML markup. Default empty.
	 * @param string $context Context of the setting ( global or site-specific ). Default 'global'.
	 */
	abstract public function execute( $settings_html, $context );
}
