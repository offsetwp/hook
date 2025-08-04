<?php
/**
 * WPPreGetAvailablePostMimeTypesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of available post MIME types for the given post type.
 *
 * @since 6.4.0
 */
abstract class WPPreGetAvailablePostMimeTypesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_get_available_post_mime_types';

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
	 * @param string[]|null $mime_types An array of MIME types. Default null.
	 * @param string $type The post type name. Usually 'attachment' but can be any post type.
	 */
	abstract public function execute( $mime_types, $type );
}
