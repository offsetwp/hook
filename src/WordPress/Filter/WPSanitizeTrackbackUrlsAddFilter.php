<?php
/**
 * WPSanitizeTrackbackUrlsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a list of trackback URLs following sanitization.
 *
 * @since 3.4.0
 */
abstract class WPSanitizeTrackbackUrlsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'sanitize_trackback_urls';

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
	 * @param string $urls_to_ping Sanitized space or carriage return separated URLs.
	 * @param string $to_ping Space or carriage return separated URLs before sanitization.
	 */
	abstract public function execute( $urls_to_ping, $to_ping );
}
