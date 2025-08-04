<?php
/**
 * WPCommentIdFieldsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the returned comment ID fields.
 *
 * @since 3.0.0
 */
abstract class WPCommentIdFieldsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'comment_id_fields';

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
	 * @param string $comment_id_fields The HTML-formatted hidden ID field comment elements.
	 * @param int $post_id The post ID.
	 * @param int $reply_to_id The ID of the comment being replied to.
	 */
	abstract public function execute( $comment_id_fields, $post_id, $reply_to_id );
}
