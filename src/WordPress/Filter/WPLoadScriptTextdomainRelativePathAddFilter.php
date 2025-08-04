<?php
/**
 * WPLoadScriptTextdomainRelativePathAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the relative path of scripts used for finding translation files.
 *
 * @since 5.0.2
 */
abstract class WPLoadScriptTextdomainRelativePathAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'load_script_textdomain_relative_path';

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
	 * @param string|false $relative The relative path of the script. False if it could not be determined.
	 * @param string $src The full source URL of the script.
	 */
	abstract public function execute( $relative, $src );
}
