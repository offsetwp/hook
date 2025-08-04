<?php
/**
 * WPValidateSiteDataAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when data should be validated for a site prior to inserting or updating in the database.
 *
 * @since 5.1.0
 */
abstract class WPValidateSiteDataAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_validate_site_data';

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
	 * @param \WP_Error $errors Error object to add validation errors to.
	 * @param array $data Associative array of complete site data. See {@see \wp_insert_site()} for the included data.
	 * @param \WP_Site|null $old_site The old site object if the data belongs to a site being updated, or null if it is a new site being inserted.
	 */
	abstract public function execute( $errors, $data, $old_site );
}
