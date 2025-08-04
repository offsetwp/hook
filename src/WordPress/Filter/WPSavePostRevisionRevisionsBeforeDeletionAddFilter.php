<?php
/**
 * WPSavePostRevisionRevisionsBeforeDeletionAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the revisions to be considered for deletion.
 *
 * @since 6.2.0
 */
abstract class WPSavePostRevisionRevisionsBeforeDeletionAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_save_post_revision_revisions_before_deletion';

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
	 * @param \WP_Post[] $revisions Array of revisions, or an empty array if none.
	 * @param int $post_id The ID of the post to save as a revision.
	 */
	abstract public function execute( $revisions, $post_id );
}
