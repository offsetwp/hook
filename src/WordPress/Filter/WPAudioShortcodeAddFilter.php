<?php
/**
 * WPAudioShortcodeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the audio shortcode output.
 *
 * @since 3.6.0
 */
abstract class WPAudioShortcodeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_audio_shortcode';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param string $html Audio shortcode HTML output.
	 * @param array $atts Array of audio shortcode attributes.
	 * @param string $audio Audio file.
	 * @param int $post_id Post ID.
	 * @param string $library Media library used for the audio shortcode.
	 */
	abstract public function execute( $html, $atts, $audio, $post_id, $library );
}
