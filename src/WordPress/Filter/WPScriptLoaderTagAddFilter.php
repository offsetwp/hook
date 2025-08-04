<?php
/**
 * WPScriptLoaderTagAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the HTML script tag of an enqueued script.
 *
 * @since 4.1.0
 */
abstract class WPScriptLoaderTagAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'script_loader_tag';

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
	 * @param string $tag The <code>&lt;script&gt;</code> tag for the enqueued script.
	 * @param string $handle The script's registered handle.
	 * @param string $src The script's source URL.
	 */
	abstract public function execute( $tag, $handle, $src );
}
