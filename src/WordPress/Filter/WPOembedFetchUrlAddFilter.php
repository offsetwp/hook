<?php
/**
 * WPOembedFetchUrlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the oEmbed URL to be fetched.
 *
 * @since 2.9.0
 * @since 4.9.0 The `dnt` ( Do Not Track ) query parameter was added to all oEmbed provider URLs.
 */
abstract class WPOembedFetchUrlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'oembed_fetch_url';

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
	 * @param string $provider URL of the oEmbed provider.
	 * @param string $url URL of the content to be embedded.
	 * @param array $args Optional. Additional arguments for retrieving embed HTML. See wp_oembed_get() for accepted arguments. Default empty.
	 */
	abstract public function execute( $provider, $url, $args );
}
