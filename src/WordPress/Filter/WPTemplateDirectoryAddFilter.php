<?php
/**
 * WPTemplateDirectoryAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the active theme directory path.
 *
 * @since 1.5.0
 */
abstract class WPTemplateDirectoryAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'template_directory';

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
	 * @param string $template_dir The path of the active theme directory.
	 * @param string $template Directory name of the active theme.
	 * @param string $theme_root Absolute path to the themes directory.
	 */
	abstract public function execute( $template_dir, $template, $theme_root );
}
