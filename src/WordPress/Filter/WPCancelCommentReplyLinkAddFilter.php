<?php
/**
 * WPCancelCommentReplyLinkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the cancel comment reply link HTML.
 *
 * @since 2.7.0
 */
abstract class WPCancelCommentReplyLinkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'cancel_comment_reply_link';

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
	 * @param string $cancel_comment_reply_link The HTML-formatted cancel comment reply link.
	 * @param string $link_url Cancel comment reply link URL.
	 * @param string $link_text Cancel comment reply link text.
	 */
	abstract public function execute( $cancel_comment_reply_link, $link_url, $link_text );
}
