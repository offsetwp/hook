<?php
/**
 * WPNewblogNotifySiteadminAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the message body of the new site activation email sent to the network administrator.
 *
 * @since MU ( 3.0.0 ) MU ( 3.0.0 )
 * @since 5.4.0 The `$blog_id` parameter was added.
 */
abstract class WPNewblogNotifySiteadminAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'newblog_notify_siteadmin';

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
	 * @param string $msg Email body.
	 * @param int|string $blog_id The new site's ID as an integer or numeric string.
	 */
	abstract public function execute( $msg, $blog_id );
}
