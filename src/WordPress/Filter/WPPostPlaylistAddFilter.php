<?php
/**
 * WPPostPlaylistAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the playlist output.
 *
 * @since 3.9.0
 * @since 4.2.0 The `$instance` parameter was added.
 */
abstract class WPPostPlaylistAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'post_playlist';

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
	 * @param string $output Playlist output. Default empty.
	 * @param array $attr An array of shortcode attributes.
	 * @param int $instance Unique numeric ID of this playlist shortcode instance.
	 */
	abstract public function execute( $output, $attr, $instance );
}
