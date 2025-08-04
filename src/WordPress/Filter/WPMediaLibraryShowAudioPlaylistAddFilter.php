<?php
/**
 * WPMediaLibraryShowAudioPlaylistAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Allows showing or hiding the "Create Audio Playlist" button in the media library.
 *
 * @since 4.7.4
 * @since 4.8.0 The filter's default value is `true` rather than `null`.
 *
 * @link  https://core.trac.wordpress.org/ticket/31071
 */
abstract class WPMediaLibraryShowAudioPlaylistAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'media_library_show_audio_playlist';

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
	 * @param bool|null $show Whether to show the button, or <code>null</code> to decide based on whether any audio files exist in the media library.
	 */
	abstract public function execute( $show );
}
