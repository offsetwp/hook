<?php
/**
 * WPImageSideloadExtensionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of allowed file extensions when sideloading an image from a URL.
 *
 * @since 5.6.0
 * @since 5.8.0 Added 'webp' to the default list of allowed file extensions.
 */
abstract class WPImageSideloadExtensionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'image_sideload_extensions';

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
	 * @param string[] $allowed_extensions Array of allowed file extensions.
	 * @param string $file The URL of the image to download.
	 */
	abstract public function execute( $allowed_extensions, $file );
}
