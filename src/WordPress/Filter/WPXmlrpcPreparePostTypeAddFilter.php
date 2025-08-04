<?php
/**
 * WPXmlrpcPreparePostTypeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters XML-RPC-prepared date for the given post type.
 *
 * @since 3.4.0
 * @since 4.6.0 Converted the `$post_type` parameter to accept a WP_Post_Type object.
 */
abstract class WPXmlrpcPreparePostTypeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'xmlrpc_prepare_post_type';

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
	 * @param array $_post_type An array of post type data.
	 * @param \WP_Post_Type $post_type Post type object.
	 */
	abstract public function execute( $_post_type, $post_type );
}
