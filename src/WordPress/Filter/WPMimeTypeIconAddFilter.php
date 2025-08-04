<?php
/**
 * WPMimeTypeIconAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the mime type icon.
 *
 * @since 2.1.0
 */
abstract class WPMimeTypeIconAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_mime_type_icon';

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
	 * @param string $icon Path to the mime type icon.
	 * @param string $mime Mime type.
	 * @param int $post_id Attachment ID. Will equal 0 if the function passed the mime type.
	 */
	abstract public function execute( $icon, $mime, $post_id );
}
