<?php
/**
 * WPOembedTtlAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the oEmbed TTL value ( time to live ).
 *
 * @since 4.0.0
 */
abstract class WPOembedTtlAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'oembed_ttl';

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
	 * @param int $time Time to live ( in seconds ).
	 * @param string $url The attempted embed URL.
	 * @param array $attr An array of shortcode attributes.
	 * @param int $post_id Post ID.
	 */
	abstract public function execute( $time, $url, $attr, $post_id );
}
