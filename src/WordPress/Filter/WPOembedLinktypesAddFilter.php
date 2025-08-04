<?php
/**
 * WPOembedLinktypesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the link types that contain oEmbed provider URLs.
 *
 * @since 2.9.0
 */
abstract class WPOembedLinktypesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'oembed_linktypes';

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
	 * @param string[] $format Array of oEmbed link types. Accepts 'application/json+oembed', 'text/xml+oembed', and 'application/xml+oembed' ( incorrect, used by at least Vimeo ).
	 */
	abstract public function execute( $format );
}
