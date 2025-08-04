<?php
/**
 * WPAdminNoticeMarkupAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the markup for an admin notice.
 *
 * @since 6.4.0
 */
abstract class WPAdminNoticeMarkupAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_admin_notice_markup';

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
	 * @param string $markup The HTML markup for the admin notice.
	 * @param string $message The message for the admin notice.
	 * @param array $args The arguments for the admin notice.
	 */
	abstract public function execute( $markup, $message, $args );
}
