<?php
/**
 * WPRestPreInsertThisPostTypeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a post before it is inserted via the REST API.
 *
 * @since 4.7.0
 */
abstract class WPRestPreInsertThisPostTypeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_pre_insert_{$this->post_type}';

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
	 * @param \stdClass $prepared_post An object representing a single post prepared for inserting or updating the database.
	 * @param \WP_REST_Request $request Request object.
	 */
	abstract public function execute( $prepared_post, $request );
}
