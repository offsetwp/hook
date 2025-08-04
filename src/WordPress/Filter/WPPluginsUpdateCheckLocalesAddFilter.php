<?php
/**
 * WPPluginsUpdateCheckLocalesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the locales requested for plugin translations.
 *
 * @since 3.7.0
 * @since 4.5.0 The default value of the `$locales` parameter changed to include all locales.
 */
abstract class WPPluginsUpdateCheckLocalesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'plugins_update_check_locales';

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
	 * @param string[] $locales Plugin locales. Default is all available locales of the site.
	 */
	abstract public function execute( $locales );
}
