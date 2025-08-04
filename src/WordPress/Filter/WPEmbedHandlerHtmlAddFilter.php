<?php
/**
 * WPEmbedHandlerHtmlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the returned embed HTML.
 *
 * @since 2.9.0
 *
 * @see WP_Embed::shortcode()
 */
abstract class WPEmbedHandlerHtmlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'embed_handler_html';

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
	 * @param string $return The HTML result of the shortcode.
	 * @param string $url The embed URL.
	 * @param array $attr An array of shortcode attributes.
	 */
	abstract public function execute( $return, $url, $attr );
}
