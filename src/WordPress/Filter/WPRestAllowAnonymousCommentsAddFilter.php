<?php
/**
 * WPRestAllowAnonymousCommentsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether comments can be created via the REST API without authentication.
 *
 * @since 4.7.0
 */
abstract class WPRestAllowAnonymousCommentsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'rest_allow_anonymous_comments';

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
	 * @param bool $allow_anonymous Whether to allow anonymous comments to be created. Default <code>false</code>.
	 * @param \WP_REST_Request $request Request used to generate the response.
	 */
	abstract public function execute( $allow_anonymous, $request );
}
