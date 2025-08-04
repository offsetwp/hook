<?php
/**
 * WPXmlrpcPrepareUserAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters XML-RPC-prepared data for the given user.
 *
 * @since 3.5.0
 */
abstract class WPXmlrpcPrepareUserAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'xmlrpc_prepare_user';

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
	 * @param array $_user An array of user data.
	 * @param \WP_User $user User object.
	 * @param array $fields An array of user fields.
	 */
	abstract public function execute( $_user, $user, $fields );
}
