<?php
/**
 * WPInsertAttachmentDataAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters attachment post data before it is updated in or added to the database.
 *
 * @since 3.9.0
 * @since 5.4.1 The `$unsanitized_postarr` parameter was added.
 * @since 6.0.0 The `$update` parameter was added.
 */
abstract class WPInsertAttachmentDataAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_insert_attachment_data';

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
	 * @param array $data An array of slashed, sanitized, and processed attachment post data.
	 * @param array $postarr An array of slashed and sanitized attachment post data, but not processed.
	 * @param array $unsanitized_postarr An array of slashed yet <em>unsanitized</em> and unprocessed attachment post data as originally passed to wp_insert_post().
	 * @param bool $update Whether this is an existing attachment post being updated.
	 */
	abstract public function execute( $data, $postarr, $unsanitized_postarr, $update );
}
