<?php
/**
 * WPXmlrpcDefaultUserFieldsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the default user query fields used by the given XML-RPC method.
 *
 * @since 3.5.0
 */
abstract class WPXmlrpcDefaultUserFieldsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'xmlrpc_default_user_fields';

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
	 * @param array $fields An array of user fields to retrieve. By default, contains 'all'.
	 * @param string $method The method name.
	 */
	abstract public function execute( $fields, $method );
}
