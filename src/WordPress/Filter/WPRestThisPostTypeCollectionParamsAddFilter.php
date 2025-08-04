<?php
/**
 * WPRestThisPostTypeCollectionParamsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters collection parameters for the posts controller.
 *
 * @since 4.7.0
 */
abstract class WPRestThisPostTypeCollectionParamsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_{$this->post_type}_collection_params';

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
	 * @param array $query_params JSON Schema-formatted collection parameters.
	 * @param \WP_Post_Type $post_type Post type object.
	 */
	abstract public function execute( $query_params, $post_type );
}
