<?php
/**
 * WPMediaSubmitboxMiscSectionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the audio and video metadata fields to be shown in the publish meta box.
 *
 * @since 3.7.0
 * @since 4.9.0 Added the `$post` parameter.
 */
abstract class WPMediaSubmitboxMiscSectionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'media_submitbox_misc_sections';

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
	public int $hook_accepted_args = 2;


	/**
	 * The hook execution method
	 *
	 * @param array $fields An array of the attachment metadata keys and labels.
	 * @param \WP_Post $post WP_Post object for the current attachment.
	 */
	abstract public function execute( $fields, $post );
}
