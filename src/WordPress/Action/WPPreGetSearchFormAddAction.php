<?php
/**
 * WPPreGetSearchFormAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires before the search form is retrieved, at the start of get_search_form().
 *
 * @since 2.7.0 as 'get_search_form' action.
 * @since 3.6.0
 * @since 5.5.0 The `$args` parameter was added.
 *
 * @link  https://core.trac.wordpress.org/ticket/19321
 */
abstract class WPPreGetSearchFormAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_get_search_form';

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
	 * @param array $args The array of arguments for building the search form. See get_search_form() for information on accepted arguments.
	 */
	abstract public function execute( $args );
}
