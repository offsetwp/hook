<?php
/**
 * WPReadAudioMetadataAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the array of metadata retrieved from an audio file.
 *
 * @since 6.1.0
 */
abstract class WPReadAudioMetadataAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_read_audio_metadata';

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
	 * @param array $metadata Filtered audio metadata.
	 * @param string $file Path to audio file.
	 * @param string|null $file_format File format of audio, as analyzed by getID3. Null if unknown.
	 * @param array $data Raw metadata from getID3.
	 */
	abstract public function execute( $metadata, $file, $file_format, $data );
}
