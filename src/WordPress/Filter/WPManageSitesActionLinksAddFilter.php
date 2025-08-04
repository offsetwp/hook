<?php
/**
 * WPManageSitesActionLinksAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the action links displayed for each site in the Sites list table.
 *
 * @since 3.1.0
 */
abstract class WPManageSitesActionLinksAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'manage_sites_action_links';

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
	 * @param string[] $actions An array of action links to be displayed.
	 * @param int $blog_id The site ID.
	 * @param string $blogname Site path, formatted depending on whether it is a sub-domain or subdirectory multisite installation.
	 */
	abstract public function execute( $actions, $blog_id, $blogname );
}
