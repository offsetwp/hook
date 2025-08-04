<?php
/**
 * WPTranslationsApiAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Allows a plugin to override the WordPress.org Translation Installation API entirely.
 *
 * @since 4.0.0
 */
abstract class WPTranslationsApiAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'translations_api';

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
	 * @param false|array $result The result array. Default false.
	 * @param string $type The type of translations being requested.
	 * @param object $args Translation API arguments.
	 */
	abstract public function execute( $result, $type, $args );
}
