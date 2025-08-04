<?php
/**
 * WPCleanUrlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a string cleaned and escaped for output as a URL.
 *
 * @since 2.3.0
 */
abstract class WPCleanUrlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'clean_url';

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
	 * @param string $good_protocol_url The cleaned URL to be returned.
	 * @param string $original_url The URL prior to cleaning.
	 * @param string $_context If 'display', replace ampersands and single quotes only.
	 */
	abstract public function execute( $good_protocol_url, $original_url, $_context );
}
