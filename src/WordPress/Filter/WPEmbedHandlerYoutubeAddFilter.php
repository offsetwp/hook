<?php
/**
 * WPEmbedHandlerYoutubeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the YouTube embed output.
 *
 * @since 4.0.0
 *
 * @see wp_embed_handler_youtube()
 */
abstract class WPEmbedHandlerYoutubeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_embed_handler_youtube';

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
	 * @param string $embed YouTube embed output.
	 * @param array $attr An array of embed attributes.
	 * @param string $url The original URL that was matched by the regex.
	 * @param array $rawattr The original unmodified attributes.
	 */
	abstract public function execute( $embed, $attr, $url, $rawattr );
}
