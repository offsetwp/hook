<?php
/**
 * WPMediaEmbeddedInContentAllowedTypesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the embedded media types that are allowed to be returned from the content blob.
 *
 * @since 4.2.0
 */
abstract class WPMediaEmbeddedInContentAllowedTypesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'media_embedded_in_content_allowed_types';

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
	 * @param string[] $allowed_media_types An array of allowed media types. Default media types are 'audio', 'video', 'object', 'embed', and 'iframe'.
	 */
	abstract public function execute( $allowed_media_types );
}
