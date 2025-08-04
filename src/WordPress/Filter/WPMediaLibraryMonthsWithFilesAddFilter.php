<?php
/**
 * WPMediaLibraryMonthsWithFilesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Allows overriding the list of months displayed in the media library.
 *
 * @since 4.7.4
 *
 * @link  https://core.trac.wordpress.org/ticket/31071
 */
abstract class WPMediaLibraryMonthsWithFilesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'media_library_months_with_files';

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
	 * @param \stdClass[]|null $months An array of objects with <code>month</code> and <code>year</code> properties, or <code>null</code> for default behavior.
	 */
	abstract public function execute( $months );
}
