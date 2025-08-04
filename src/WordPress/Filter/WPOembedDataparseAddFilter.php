<?php
/**
 * WPOembedDataparseAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the returned oEmbed HTML.
 *
 * @since 2.9.0
 */
abstract class WPOembedDataparseAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'oembed_dataparse';

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
	 * @param string $return The returned oEmbed HTML.
	 * @param object $data A data object result from an oEmbed provider.
	 * @param string $url The URL of the content to be embedded.
	 */
	abstract public function execute( $return, $data, $url );
}
