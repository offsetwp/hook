<?php
/**
 * WPOembedIframeTitleAttributeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the title attribute of the given oEmbed HTML iframe.
 *
 * @since 5.2.0
 */
abstract class WPOembedIframeTitleAttributeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'oembed_iframe_title_attribute';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param string $title The title attribute.
	 * @param string $result The oEmbed HTML result.
	 * @param object $data A data object result from an oEmbed provider.
	 * @param string $url The URL of the content to be embedded.
	 */
	abstract public function execute( $title, $result, $data, $url );
}
