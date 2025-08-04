<?php
/**
 * WPPreAttachmentUrlToPostidAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the attachment ID to allow short-circuit the function.
 *
 * @since 6.7.0
 */
abstract class WPPreAttachmentUrlToPostidAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_attachment_url_to_postid';

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
	 * @param int|null $post_id The result of the post ID lookup. Null to indicate no lookup has been attempted. Default null.
	 * @param string $url The URL being looked up.
	 */
	abstract public function execute( $post_id, $url );
}
