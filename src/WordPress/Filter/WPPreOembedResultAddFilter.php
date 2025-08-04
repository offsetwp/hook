<?php
/**
 * WPPreOembedResultAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the oEmbed result before any HTTP requests are made.
 *
 * @since 4.5.3
 */
abstract class WPPreOembedResultAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_oembed_result';

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
	 * @param null|string $result The UNSANITIZED ( and potentially unsafe ) HTML that should be used to embed. Default null to continue retrieving the result.
	 * @param string $url The URL to the content that should be attempted to be embedded.
	 * @param string|array $args Optional. Additional arguments for retrieving embed HTML. See wp_oembed_get() for accepted arguments. Default empty.
	 */
	abstract public function execute( $result, $url, $args );
}
