<?php
/**
 * WPDropdownPagesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the HTML output of a list of pages as a dropdown.
 *
 * @since 2.1.0
 * @since 4.4.0 `$parsed_args` and `$pages` added as arguments.
 */
abstract class WPDropdownPagesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_dropdown_pages';

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
	 * @param string $output HTML output for dropdown list of pages.
	 * @param array $parsed_args The parsed arguments array. See wp_dropdown_pages() for information on accepted arguments.
	 * @param \WP_Post[] $pages Array of the page objects.
	 */
	abstract public function execute( $output, $parsed_args, $pages );
}
