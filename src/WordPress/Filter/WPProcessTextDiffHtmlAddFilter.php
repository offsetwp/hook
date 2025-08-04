<?php
/**
 * WPProcessTextDiffHtmlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Contextually filters a diffed line.
 *
 * @since 4.1.0
 */
abstract class WPProcessTextDiffHtmlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'process_text_diff_html';

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
	 * @param string $processed_line The processed diffed line.
	 * @param string $line The unprocessed diffed line.
	 * @param string $context The line context. Values are 'added', 'deleted' or 'unchanged'.
	 */
	abstract public function execute( $processed_line, $line, $context );
}
